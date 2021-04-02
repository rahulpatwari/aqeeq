<?php
  require_once('controller/session.php');
?>
    <?php
      require_once('config.php');

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

      $product_shipment.= $cart_itm["shipment"];

      $product_price = $cart_itm["product_price"];

      $product_code = $cart_itm["product_code"];

      //$product_color = $cart_itm["product_color"];

      $subtotal = ($product_price * $product_qty);
      
      $total = ($total + $subtotal);
      } } 
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
        $grand_total = $total + $shipping_cost;
      $get_total=$total;
       ?> 

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
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php include 'include/css.php'; ?>

</head>

<body>

<div class="pageWrap">
  
  <?php include 'include/header.php'; ?>

<section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li></li>
             <div> 
                  
       
           <!-- <?php if($wallet_amount==0){?>
             <p class="btn"style="background: #1E90BC;color: #fff;">Wallet Amount : ₹ 00</p>
            <?php }else {?>
          <p class="btn"style="background: #1E90BC;color: #fff;">Pay By Wallet Amount : ₹ <?php echo $wallet_amount;?>
          </p>

      <?php }?> -->
               </div>
      </ul>
    </div>
  </section>  <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
      <!--  <header class="heading-3 page-heading">
          <h4><a href="index.php" class="back-btn"><i class="flaticon-arrowhead7"></i>Back to Shop</a></h4>
        </header> -->
        
        <div class="steps-holder">
          <div class="step">
            <span>1</span>
            <p>Pick Your Product</p>
          </div><!-- /step -->
          <div class="step">
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
        
        <div class="form-main-container">
          <form class="checkout-form" method="POST" action="order-summary.php">
            <div class="row">
              <div class="col-sm-8">
                <div class="form-section-box">
                  <h5>Customer</h5>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Full Name <span style="color:red">*</span></label>
                    <div class="col-md-9">
                      <input type="text" placeholder="First Name" name="name" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');"  class="form-control" value="<?php echo htmlspecialchars($name); ?>" required>
                    </div>
                  </div>
                
                  
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Email Address <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="email" placeholder="Email Address" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Phone Number <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="text" placeholder="Phone Number" name="mobile" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo htmlspecialchars($mobile); ?>"  required>
                    </div>
                  </div>
               <!--    <div class="form-group row">
                    <label class="col-md-3 label-md">Preferred contact</label>
                    <div class="col-md-7"> 
                      <label class="radio-inline">
                        <input type="radio" value="By Email" name="preferred-contact" required> By Email
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="By Phone" name="preferred-contact" required> By Phone
                      </label>
                    </div>
                  </div> -->
                </div><!-- /form-section-box -->
                <div class="form-section-box">
                 
                 
                 
                 
                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="checkbox">
                        <strong>Delivery Address</strong>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Full Address <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="address" required=""><?php echo htmlspecialchars($address); ?></textarea>
                    </div>
                  </div>

                   
                  
                 
                  <div class="form-group row">
                    <label class="col-md-3 label-md">City <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" placeholder="City" name="city" value="<?php echo htmlspecialchars($city); ?>" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">State <span style="color:red">*</span></label>
                    <div class="col-md-9">
                      <select class="form-control" name="state">
                                      <?php if(!empty($state)){?>   
                                                <option value="<?php echo htmlspecialchars(ucwords($state)); ?>"><?php echo htmlspecialchars(ucwords($state)); ?></option>
                                                <?php } ?>  
                        <option value="">- Select State -</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Zip Code <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="text" placeholder="Zip Code" name="zip" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="6" minlength="6" value="<?php echo htmlspecialchars($zip); ?>">
                    </div>
                  </div>
                  




                 <!--  
                 <hr>
                 <div class="form-group row">
                    <label class="col-md-3 label-md">Email Address*</label>
                    <div class="col-md-9">
                      <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <label class="col-md-3 label-md">Phone Number*</label>
                    <div class="col-md-9">
                      <input type="text" placeholder="Phone Number" class="form-control">
                    </div>
                  </div> -->
                </div><!-- /form-section-box -->

               <!--  <div class="form-section-box">
                  <h5>Newsletter</h5>
                  <div class="checks">
                    <p>Select the special offers, new arrivals and VIP offers you are interested in and you will receive them via email:</p>
                    <label class="checkbox-inline"><input type="checkbox" value="">Perfumes</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Beauty Products</label>
                  </div>
                  <div class="checks">
                    <p>Select the magazines you want to receive via email:</p>
                    <label class="checkbox-inline"><input type="checkbox" value="">Magazines for women only</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Magazines for men only</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Magazines for men and women</label>
                  </div>
                </div> -->
                <!-- /form-section-box -->

                <!-- <div class="form-section-box">
                  <h5>More Specific Information</h5>
                  <div class="form-group">
                    <label>An important message which might help you receive your items faster.</label>
                    <textarea placeholder="Enter More Information" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <label><input type="checkbox" name="gift" value="">Do not add the invoice to the package, it is a gift.</label>
                    </div>
                  </div>
                </div> -->



                <!--start other details option here-->

                                                         <a  href="JavaScript:Void(0)" class="btn btn-default clickbtaa">Add Other Address</a>


                  <div class="form-section-box addadd" style="display: none;">
                 
                 
                 
                 
                  <div class="form-group row ">
                    <div class="col-md-12">
                      <div class="checkbox">
                        <strong>Other Delivery Address</strong>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Full Address <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="other_address" ></textarea>
                    </div>
                  </div>

                 
                  
                 
                  <div class="form-group row">
                    <label class="col-md-3 label-md">City <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" placeholder="City" name="other_city" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">State <span style="color:red">*</span></label>
                    <div class="col-md-9">
                      <select class="form-control" name="other_state">
                                                                                            
                        <option value="">- Select State -</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-md">Zip Code <span style="color:red">*</span> </label>
                    <div class="col-md-9">
                      <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Zip Code" name="other_zip" class="form-control" maxlength="6" minlength="6" value="452016">
                    </div>
                  </div>
                  




                </div>





                <!---end other details option here-->













              </div>
              <div class="col-sm-4">
                <div class="widget widget-shipping-info">
                  <ul>
                    <li>Price of items <span>INR <?php echo $get_total;; ?>.00 </span></li>
                    <li>Shipping Fee <span>INR <?php echo $shipping_cost; ?> </span></li>
                    <li>Wallet Amount <span>INR <?php echo $wallet; ?>.00 </span></li>
                    <li>Total <strong> INR <?php echo $grand_total-$wallet; ?>.00</strong></li>
                  </ul>
                </div>
                

             




                <div class="form-section-box">
                  <h5>Method of Payment</h5>
                  <ul class="shipping-list">
                    <li>
                      <div class="radio">
                        <label><input type="radio" name="payment" value="online" class="checkParent" required="" checked="">
                        <strong>Credit/Debit Card Payment (online)</strong></label>
                      </div>
                      <ul class="list-cards">
                        <li><img alt="" src="images/logo-visa.png"></li>
                        <li><img alt="" src="images/logo-americanexpress.png"></li>
                        <li><img alt="" src="images/logo-mastercard.png"></li>
                      </ul>
                    </li>
                    <li>
                      <!-- <div class="radio">
                        <label><input type="radio" name="payment" value="cod" class="checkParent" required="">
                        <strong>Cash On Delievery (COD)</strong></label>
                      </div> -->
                     <!--  <ul class="list-cards">
                        <li><img alt="" src="https://icon-library.net/images/cash-on-delivery-icon/cash-on-delivery-icon-14.jpg" style="width: 44%; height: auto;"></li>
                      </ul> -->
                    </li>

                  </ul>
                </div>

              </div>



            </div><!-- /row -->
            <div class="row cart-actions">
              <div class="col-sm-6">
                <a href="cart.php" class="go-back" onclick="goBack()"><i class="flaticon-arrow83"></i>Return To Previous Page</a>
              </div>
              <div class="col-sm-6">
                <button type="submit" name="order" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div><!-- /form-main-container -->


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

<script>
function goBack() {
  window.history.back();
}
</script>
</body>

</html>
