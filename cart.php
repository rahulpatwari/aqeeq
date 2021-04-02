<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
   <meta name="theme-color" content="#e32a53" />
  <title>Aqeeq</title>
     <link href="css/jquery-ui.css" rel="stylesheet">
   <?php include 'include/css.php'; ?>

</head>

<body>

<div class="pageWrap">
  
  <?php include 'include/header.php'; ?>

   <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li></li>
        
      </ul>
    </div>
  </section>  <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
        <!-- <header class="heading-3 page-heading">
          <h4><a href="index.php" class="back-btn"><i class="flaticon-arrowhead7"></i>Back to Shop</a></h4>
        </header> -->
        
        <div class="steps-holder">
          <div class="step">
            <span>1</span>
            <p>Pick Your Product</p>
          </div><!-- /step -->
          <div class="step active">
            <span>2</span>
            <p>Shipping Address</p>
          </div><!-- /step -->
          <div class="step active">
            <span>3</span>
            <p>Shipping and Payment</p>
          </div><!-- /step -->
          <div class="step active">
            <span>4</span>
            <p>Order Summery</p>
          </div><!-- /step -->
        </div><!-- /steps-holder -->
<!--         <p class="text-right"><a href="checkout-shipping.php" class="btn btn-default btn-lg">Proceed to Checkout</a></p>
 -->        
        <div class="cart-main-container">
<form method="post" action="cart_update.php">

          <div class="cart-table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                <?php
  $get_overallproduct =  count($_SESSION["cart_products"]);
  if(isset($_SESSION["cart_products"])) //check session var

    {

    $total = 0; //set initial total value

    $b = 0; //var for zebra stripe table 

    foreach ($_SESSION["cart_products"] as $cart_itm)

        {

      //set variables to use in content below

      $product_name = $cart_itm["product_name"];

      $product_qty = $cart_itm["product_qty"];

      $product_price = $cart_itm["product_price"];

      $product_shipment.= $cart_itm["shipment"];

      $product_code = $cart_itm["product_code"];

      //$product_color = $cart_itm["product_color"];

      $subtotal = ($product_price * $product_qty);



                ?>
                <tr>
                  <td>
                    <div class="prod-list-thumb media">
                      <figure class="media-left"><a href="#"><img src="images/resource/img-15.jpg" alt="image"></a></figure>
                      <div class="media-body">
                          <?php
              require_once('owner/autho/data-autho.php');
              $sqlsi = mysqli_query($con,"Select * from `products` where product_code = '$product_code' "); 
              while($datasi = mysqli_fetch_array($sqlsi)){ 
                $getproduct_id=htmlspecialchars($datasi['id']);
                $getproduct_details=$datasi['product_desc'];
                $brand=$datasi['brand'];
                ?>
                        <h4 class="text-primary"><a href="details.php?id=<?php echo $getproduct_id; ?>"><img src="product/<?php echo $datasi['f_newfile']; ?>" style="width: 100px; height: 100px; border: 1px solid black; margin-right:70px; float: left;"></a><a href="details.php?id=<?php echo $getproduct_id; ?>"><?php echo ucwords($brand)." ".ucwords($product_name); ?><br><br><p class="float-right" style="font-size: 14px;
    color: #000;
    font-family: inherit;
    font-style: inherit;"><?php  $position=200; 
                     $blogcontent = substr($getproduct_details, 0, $position);
                     echo strip_tags($blogcontent); echo "...";  ?></p></a>

                        </h4>
                      </div>
                    </div>
                  </td>
            <?php } ?>      
                  <td>INR<div class="prod-price"> <?php echo $product_price; ?>.00</div></td>
                  <td><div class="prod-qty"><input type="number"  name="product_qty[<?php echo $product_code; ?>]" min="1" value="<?php echo $product_qty; ?>" style="    width: 68px;
    height: 35px;
    padding: 6px;
    margin-right: 10px;
    border: 1px solid #dddddd;">Qty</div></td>
                  <td>INR<div class="prod-price"> <strong><?php echo $subtotal; ?>.00</strong></div></td>
                  <td><input type="checkbox" name="remove_code[]" value="<?php echo $product_code ?>" /></td>
                  <?php $total = ($total + $subtotal); ?>
                </tr>
          <?php } 
          $get_sum_shipment =  (str_split($product_shipment));
          $shipment_sum = array_sum($get_sum_shipment);

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

         

           $grand_total = $total + $shipping_cost; //grand total including shipping cost

    foreach($taxes as $key => $value){ //list and calculate all taxes in array

        $tax_amount     = round($total * ($value / 100));

        $tax_item[$key] = $tax_amount;

        $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total

    } } ?>      
                <tr>
                  <input type="hidden" name="return_url" value="<?php 

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

echo $current_url; ?>" />

                  <td><button type="submit" class = "button"> Update</button></td>
                </tr>  

              <!--   <tr>
                  <td colspan="3">
                    <div class="checkbox">
                      
                      <label><input type="checkbox" required="" checked=""><strong>   <?php if ($shipment_sum=='0') {
                        echo 'Free Shipping';
                      }
                      else
                      {
                        echo "Shipping Charges $shipping_cost Inr";
                      }

                       ?> </strong></label>
                    </div>
                    <p>I want the guarantee of delivery and prevention from any possible needs to make a complaint. In case of lost or 
damages items, we will send you new ones right away.</p>
                  </td>
                  <td colspan="2">
                    <div class="prod-price"><strong><?php echo sprintf("%01.2f", $grand_total);?></strong></div>
                  </td>
                </tr> -->

          <!--       <tr>
                  <td colspan="5">
                    <div><a data-toggle="collapse" href="#gift-infor-1"><strong>Select a free gift with purchase</strong> <i class="flaticon-small63"></i></a></div>
                    <div id="gift-infor-1" class="gift-boxes collapse">
                      <div class="row">
                        <div class="col-sm-6  col-md-4">
                          <div class="gift-list-thumb media">
                            <figure class="media-left"><img src="images/resource/img-16.jpg" alt="image"></figure>
                            <div class="media-body">
                              <div class="radio">
                                <label><input type="radio" name="free-gift">Bvlgari Jasmin Noir eau de parfum tester for women</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6  col-md-4">
                          <div class="gift-list-thumb media">
                            <figure class="media-left"><img src="images/resource/img-17.jpg" alt="image"></figure>
                            <div class="media-body">
                              <div class="radio">
                                <label><input type="radio" name="free-gift">Thierry Mugler Alien eau de parfum for women</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr> -->
                <!-- <tr>
                  <td colspan="5">
                    <form class="form-inline">
                      <label>Gift Voucher or discount code</label>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="voucher or discount code">
                      </div>
                      <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <div class="prod-price-tot">Total price of items</div>
                  </td>
                  <td colspan="2">
                    <div class="prod-price"><strong>$45.50</strong></div>
                  </td>
                </tr> -->
              </tbody>
            </table>

          </div><!-- /cart-table -->
              </form>  

          <div class="row cart-actions">
            <div class="col-sm-6">
              <a class="go-back" href="index.php"><i class="flaticon-arrow83"></i>Back to Shop</a>
            </div>
            <div class="col-sm-6">
              <a class="btn btn-default btn-lg" href="checkout-shipping.php">Proceed to Checkout</a>
            </div>
          </div>
          


        </div><!-- /cart-main-container -->


      </div><!-- /cart-block -->
    </div>

  </section>



	 <!---footer--->
  <?php include 'include/footer.php'; ?>
  <!---footer--->
	


</div><!-- /pageWrap -->




<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>

</body>

</html>
