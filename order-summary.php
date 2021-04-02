<?php
  require_once('controller/session.php');
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

   <?php include 'include/css.php'; ?>

 <style type="text/css">
   .w-100{
    width: 100%;
   }

    .totle-f{

   	color: blue;
    font-weight: 500;
    font-size: 20px;
    float: right;
   }

.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}



 </style>

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
  </section> <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">

    	 <div class="steps-holder">
          <div class="step">
            <span>1</span>
            <p>Pick Your Product</p>
          </div><!-- /step -->
          <div class="step">
            <span>2</span>
            <p>Shipping Address</p>
          </div><!-- /step -->
          <div class="step">
            <span>3</span>
            <p>Shipping and Payment</p>
          </div><!-- /step -->
          <div class="step active">
            <span>4</span>
            <p>Order Summery</p>
          </div><!-- /step -->
        </div><!-- /steps-holder -->

    	<div class="row">
        <div class="col-md-8 col-sm-offset-2" style=" padding: 35px;box-shadow: 0px 2px 10px #8e8888;
">
    		<div class="invoice-title">
    			<h2>Order-Summary</h2><h3 class="pull-right"></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Shipped To:</strong><br>
    					<?php echo htmlspecialchars(ucwords($_POST['name']));?><br>
    				    <?php echo htmlspecialchars($_POST['address']); ?>    <br>
    					<?php echo htmlspecialchars($_POST['city']);?><br>
              <?php echo htmlspecialchars($_POST['zip']);?><br>
              <?php echo htmlspecialchars($_POST['mobile']);?>
    				</address>
    			</div>
    		
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				
    			</div>
    			<div class="col-xs-6 text-right" style="margin-top: -142px;">
                    <address>
                        <strong>Payment Method:</strong>
                        <b><?php echo htmlspecialchars($_POST['payment']);?></b><br>
                    </address>
    				<address>
    					<strong>Order Date:</strong>
    					<?php echo date('d/m/Y'); ?><br><br>
    				</address>
    			</div>
    		</div>

    		<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
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

      $product_code = $cart_itm["product_code"];

      $product_shipment.= $cart_itm["shipment"];      

      //$product_color = $cart_itm["product_color"];

      $subtotal = ($product_price * $product_qty);

      $total = ($total + $subtotal);


 
  
                ?>
    							<tr>
                     <?php $sql="SELECT * from products where product_code='".$product_code."'";
  $res=mysqli_query($con,$sql);
  while ($data=mysqli_fetch_array($res)) {
       $brand=$data['brand'];}?>
    								<td><?php echo $brand." ".$product_name; ?></td>
    								<td class="text-center">INR <?php echo $product_price; ?>.00</td>
    								<td class="text-center"><?php echo $product_qty; ?></td>
    								<td class="text-right">INR <?php echo $subtotal; ?>.00</td>
    							</tr>
    <?php  } }  
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
          } ?>
    						<tr>
    							<td></td>
    							<td></td>
    							<td></td>
    							<td><P class="totle-f">Shipping Amount :- INR <?php echo $shipping_cost; ?>.00</P></td>
    						</tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><P class="totle-f">Discount :- INR <?php  echo $wallet;
 ?>.00</P></td>
                </tr>

    						<tr>
    							<td></td>
    							<td></td>
    							<td></td>
    							<td><P class="totle-f">Amount Paid  :- INR <?php  $grand_total = $total + $shipping_cost; //grand total including shipping cost
    echo $grand_total = $total + $shipping_cost-$wallet;
 ?>.00</P></td>
    						</tr>


    						</tbody>
    					</table>
                       
      

    				</div>
    			</div>
    		</div>
<!--     	<button type="submit" name="order" class="btn btn-default btn-block">Confirm Your Order</button>
 --> 


<form action="controller/order.php" method="POST">

    <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']);?>">
    <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($_POST['mobile']);?>">
    <input type="hidden" name="address" value="<?php echo htmlspecialchars($_POST['address']); ?>">
    <input type="hidden" name="city" value="<?php echo htmlspecialchars($_POST['city']);?>">
    <input type="hidden" name="state" value="<?php echo htmlspecialchars($_POST['state']); ?>">
    <input type="hidden" name="zip" value="<?php echo htmlspecialchars($_POST['zip']); ?>">
    <input type="hidden" name="shipping_paymentu" value="<?php echo htmlspecialchars($_POST['payment']); ?>">


<div class="col-md-6">
<button type="button" class="btn btn-default btn-block" onclick="goBack()">Back To Previous Page</button>
  </div>
  <div class="col-md-6">
<button type="submit" name="order" class="btn btn-default btn-block">Confirm Your Order</button>
</div>

</form>












    	</div>
   
    </form>





    </div>
</div>
   

  </section>
<script>
function goBack() {
  window.history.back();
}
</script>


     <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->

</div><!-- /pageWrap -->


<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>
</body>
</html>
