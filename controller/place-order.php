 <?php
  require_once('session.php');
  require_once('../config.php');
  session_start();
  $referal_id=$_SESSION['refaral_id'];
  $data=$_SESSION["cart_products"];
  $getpr=count($data);
  $date=date('d/m/Y');
  require_once('../owner/autho/data-autho.php');
    $offer_amount = mysqli_query($con,"Select * from `offer_amount`");
      while($off_amount = mysqli_fetch_array($offer_amount)){
      $get_off=$off_amount['amount'];
      $offer_admin=$off_amount['referal_amount'];

      } 
  $getadmin_refer=$getpr*$offer_admin;  
   if (!empty($referal_id)) {
       $sql_refaral = "INSERT INTO `referal`(`id`, `date`, `product`, `amount`, `referal_id`) VALUES (null,'" . $date . "','" . $getpr . "','" . $getadmin_refer . "','" . $referal_id . "')"; 
        $sqlrefer=(mysqli_query($con, $sql_refaral));
      $offer_referal = "UPDATE `user` SET wallet = '$getpr' WHERE user_id='$referal_id'";
      $referal_wallet=(mysqli_query($con, $offer_referal));   
        unset($_SESSION["refaral_id"]);
      }
  
      

   //check session var
  $order_id=uniqid();
  $date=date('d/m/Y');
  $month=date('F');
  $day=date('l');
  $year=date('Y');
  date_default_timezone_set('Asia/Kolkata');
  $time=date( 'H:i:s', time ());
  $status='active';


    


  $get_overallproduct =  count($_SESSION["cart_products"]);
	if(isset($_SESSION["cart_products"])){
    $uasql=mysqli_query($con,"Select wallet from `user` where user_id='$user_id'");
      while($uwamount = mysqli_fetch_array($uasql)){
      $get_uwallet_amount=$uwamount['wallet'];
      } 
    // $getwallet_amount=count($_SESSION["cart_products"]);
    //  $wallet_amount=$get_off*$getwallet_amount;
    //     $new_wallet_amount=$wallet_amount+$get_uwallet_amount;
    $total = 0; //set initial total value

    $b = 0; //var for zebra stripe table 

    foreach ($_SESSION["cart_products"] as $cart_itm){
      $product_name = $cart_itm["product_name"];
      $product_qty = $cart_itm["product_qty"];
      $product_shipment.= $cart_itm["shipment"];            
      $product_price = $cart_itm["product_price"];
      $product_code = $cart_itm["product_code"];
      $subtotal = ($product_price * $product_qty);

      //product log insert//
      $sql = "INSERT INTO `order_log`(`id`, `date`, `product_name`, `quantity`, `price`, `product_code`, `subtotal`, `order_id`, `user_id`) VALUES (null,'" . $date . "','" . $product_name . "','" . $product_qty . "','" . $product_price . "','".$product_code."','" . $subtotal . "','" . $order_id . "','" . $user_id . "')";
      $sqlcheck=(mysqli_query($con, $sql));

      //product quantity fetch by database//
      require_once('../owner/autho/data-autho.php');
      $quantitydata = mysqli_query($con,"Select * from `products` where product_code ='$product_code'");
      while($quantitydataget = mysqli_fetch_array($quantitydata)){
      	$quantity_get=$quantitydataget['quantity'];
      }	
      $less_quantity=$quantity_get-$product_qty;
      //product less from quantity//
      $order_manage = "UPDATE `products` SET quantity = '$less_quantity' WHERE product_code='$product_code'";
      $ordercheck=(mysqli_query($con, $order_manage)); 

      $total = ($total + $subtotal);

      }
      $get_sum_shipment =  (str_split($product_shipment));
       $shipment_sum = array_sum($get_sum_shipment);
       $shipping_cost_get;
      if ($get_overallproduct>=5) {
            if ($shipment_sum=='0') {
             $shipping_cost=0;
            }
            else{
              $shipping_cost=$shipping_cost_get*2;
            }
          }
          else{
            if ($shipment_sum=='0') {
            $shipping_cost=0;
            }
            else{
              $shipping_cost=$shipping_cost_get;
            }
          }
         $total_amounts=$total;
      $grand_totals = $total + $shipping_cost-$wallet;
       
     

    require_once('../owner/autho/data-autho.php');
    $sql_order = "INSERT INTO `orders`(`id`, `date`, `month`, `day`, `year`, `time`, `user_id`, `order_id`, `amount`, `shipping`, `total`, `payment_mode`, `status`, `transaction_id`, `discount`) VALUES (null,'" . $date . "','" . $month . "','" . $day . "','" . $year . "','".$time."','" . $user_id . "','" . $order_id . "','" . $total . "','" . $shipping_cost . "','" . $grand_totals . "','" . $shipping_paymentu . "','" . $status . "','".$razorpay_payment_id."','".$wallet."')";
     if(mysqli_query($con, $sql_order)){
      require_once('sendmail.php');
      require_once('succmail.php');
      session_start();
      unset($_SESSION["cart_products"]);
   

//Wallet Amount new
require_once('../owner/autho/data-autho.php');
    $offers_amounts = mysqli_query($con,"Select * from `offer_amount` where id='1'");
      $row_s=mysqli_fetch_array($offers_amounts,MYSQLI_ASSOC);
           $per=$row_s['per'];
           $per_amount=$row_s['amount'];
  if ($total_amounts>=$per_amount) {
        $add_amount=($total_amounts*$per)/100;
  }
  
      echo $offer = "UPDATE `user` SET wallet = '$add_amount' WHERE user_id='$user_id'";
      if(mysqli_query($con, $offer)); 
     {  

     

    header("location:../succ.php?");
    }
     }
     else{
     	echo 'error';
     }

    
    


} ?> 
