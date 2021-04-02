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

  <?php
  echo $user_id;
  require_once('owner/autho/data-autho.php');
  require_once('controller/session.php');
  $orderdata = mysqli_query($con,"Select * from orders where user_id = '$user_id' order by id desc limit 1 ");
    while($odata = mysqli_fetch_array($orderdata)){ 
      $get_orderid=$odata['order_id'];
      $getpayment_mode=$odata['payment_mode'];
      ?>

<section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li></li>
    </ul>
    </div>
  </section> <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">

    	<div class="row">
        <div class="col-md-8 col-sm-offset-2" style=" padding: 35px;box-shadow: 0px 2px 10px #8e8888;
">
    		<div class="invoice-title">
    			<h2>Order Confirmation</h2><h3 class="pull-right"></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Shipped To:</strong><br>
    					<?php echo htmlspecialchars(ucwords($name));?><br>
    				    <?php echo htmlspecialchars($address); ?>    <br>
    					<?php echo htmlspecialchars($city);?><br>
              <?php echo htmlspecialchars($zip);?><br>
              <?php echo htmlspecialchars($mobile);?>
    				</address>
    			</div>
    		
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				
    			</div>
    			<div class="col-xs-6 text-right" style="margin-top: -142px;">
                   
    				<address>
            <strong>Payment Method</strong> :- Online Payment<br>
    				<strong>Order Date</strong> :- <?php echo $odata['date'];?><br>
              <strong>Order Id</strong> :-  <?php echo $get_orderid;?><br><br>
            </address>
    			</div>
    		</div>

    		<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order Confirmation</strong></h3>
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
  require_once('owner/autho/data-autho.php');
  $orderdata_log = mysqli_query($con,"Select * from order_log where order_id = '$get_orderid'");
    while($odata_log = mysqli_fetch_array($orderdata_log)){ $product_code=$odata_log['product_code']?>        
    							<tr>
                    <?php $sql="SELECT * from products where product_code='".$product_code."'";
  $res=mysqli_query($con,$sql);
  while ($data=mysqli_fetch_array($res)) {
       $brand=$data['brand'];}?>
    								<td><?php echo $brand." ".$odata_log['product_name']; ?></td>
    								<td class="text-center">INR <?php echo $odata_log['price']; ?>.00</td>
    								<td class="text-center"><?php echo $odata_log['quantity']; ?></td>
    								<td class="text-right">INR <?php echo $odata_log['subtotal']; ?>.00</td>
    							</tr>                  
  <?php  } ?>             

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><P class="totle-f">Shipping Amount :-  INR <?php echo $odata['shipping']; ?>.00</P></td>
                  </tr>

                   <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><P class="totle-f">Discount Amount :- INR  <?php echo $odata['discount']; ?>.00</P></td>
                  </tr> 

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><P class="totle-f">Amount Paid :- INR <?php  echo $odata['total'];?>.00
</td>
                  </tr>   
    						</tbody>
    					</table>
                       
      
            </P>

    				</div>
    			</div>
    		</div>
<a href="my-account.php" class="btn btn-default btn-block">Back To Account</a>













    	</div>
   
    </form>




    </div>
</div>
   

  </section>


<?php } ?>
     <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->

</div><!-- /pageWrap -->


<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>
</body>
</html>
