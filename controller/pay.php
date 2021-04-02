<?php 

require_once('session.php');

    if(isset($_SESSION["cart_products"])){
        require_once('../config.php');

    $total = 0; //set initial total value

    $b = 0; //var for zebra stripe table 

    foreach ($_SESSION["cart_products"] as $cart_itm){
      $product_name = $cart_itm["product_name"];
      $product_qty = $cart_itm["product_qty"];
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

     $grand_totals = $total + $shipping_cost-$wallet; 


}

?>

<html>

  <head>

    <title> RazorPay Integration in PHP - phpexpertise.com </title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>

      .razorpay-payment-button {

        color: #ffffff !important;

        background-color: #7266ba;

        border-color: #7266ba;

        font-size: 18px;

        padding: 10px;

         display: block;
  margin-left: auto;
  margin-right: auto;

      }

    </style>

  </head>

  <body>

    <center><img src="http://www.1pay.in/img/1pay/1pay.gif" style="width: 25%; height: auto;"></center><br><br>

    <form action="charge.php" method="POST">

    <!-- Note that the amount is in paise = 50 INR -->

    <script

        src="https://checkout.razorpay.com/v1/checkout.js"

        data-key="rzp_test_NtynhRzkVMqcoG"

        data-amount="<?php echo $grand_totals; ?>00"

        data-buttontext="Pay By Debit/Credit/Internetbanking"

        data-name="Aqeeqtrading.com"

        data-description="Aqeeq Payment For Ecommerce"

        data-image="http://aqeeqtrading.com/images/logo.png"

        data-prefill.name="<?php echo $name; ?>"

        data-prefill.email="<?php echo $email; ?>"

        data-theme.color="#F37254"

    ></script>

    <input type="hidden" value="Hidden Element" name="hidden">

    </form>

  </body>

</html>