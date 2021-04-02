   <?php
  require_once('config.php');
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

  .bg-lights {
    background: #f1f1f1;
    width: 47%;
    margin: 10px;
    padding: 10px;
    min-height: 115px;
    border-radius: 2%;
}

@media (max-width: 768px) {

  .bg-lights {

  	width: 100%;
  }

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
       
    </div>
  </section> <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
       <!-- <header class="heading-3 page-heading">
          <h4><?php echo $name; ?></h4>
          <a href="controller/logout.php" class="signout-link"><i class="flaticon-close9"></i>Sign Out</a>
        </header> -->
 
       
        
        <div class="form-main-container">
          <div class="row">
            <div class="col-sm-4">
							<div class="shipping-info">
								<div class="section-inner">
									<h5>Shipping and Information</h5>
									<p><?php echo $email; ?> <br>+91 <?php echo $mobile; ?> <br><?php echo $address; ?><br><?php echo $city; ?> <?php echo $zip; ?></p>
									<ul class="meta-list">
										<li><a href="edit-contact-data.php" class="text-primary" data-toggle="collapse">Edit Contact Data</a></li>
										<li><a href="change-password.php" class="text-primary">Change Password</a></li>
									</ul>
								
								</div><!-- /section-inner -->

							<!-- /section-inner -->
								<div class="section-inner">
									<h5>My Orders</h5>
									<p>No item matches the selected filter.</p>
									<a href="order-history.php">Previous Orders <i class="flaticon-small63"></i></a>
								</div><!-- /section-inner -->
							</div><!-- /shipping-info -->
            </div>

             <div class="col-sm-8">
							<div class="shipping-info">
								<div class="section-inner">
									
									
								
									<div class="form-section-box">
										<form class="edit-contact-form" method="POST" action="controller/user-update.php">
											<h5>Contact</h5>	
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Full Name</label>
		                    <div class="col-md-9">
		                      <input type="text" class="form-control" placeholder="First Name" name="name" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo htmlspecialchars($name); ?>" required="" >
		                    </div>
		                  </div>
											
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Email</label>
		                    <div class="col-md-9">
		                      <input type="email" class="form-control" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>"  name="email" required="" readonly="">
		                    </div>
		                  </div>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Phone Number</label>
		                    <div class="col-md-9">
		                      <input type="text" class="form-control" placeholder="Phone Number" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>" required="" readonly="">
		                    </div>
		                  </div>
										
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Address</label>
		                    <div class="col-md-9">
		                      <textarea class="form-control" placeholder="Street And House Number" name="address" required=""><?php echo htmlspecialchars($address); ?></textarea>
		                    </div>
		                  </div>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">City</label>
		                    <div class="col-md-9">
		                      <input type="text" class="form-control" placeholder="City" name="city" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo htmlspecialchars($city); ?>" required="">
		                    </div>
		                  </div>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">State</label>
		                    <div class="col-md-9">
		                        <select class="form-control" name="state" required="">
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
                      </select>		                    </div>
		                  </div>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Zip Code</label>
		                    <div class="col-md-9">
		                      <input type="text" class="form-control" placeholder="Zip Code" maxlength="6" minlength="6" value="<?php echo htmlspecialchars($zip); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="" name="zip">
		                    </div>
		                  </div>
										
											<input type="submit" name="submit" class="btn btn-default btn-lg" value="Save">
										</form><!-- /edit-contact-form -->
									</div><!-- /form-section-box -->
							
								</div><!-- /section-inner -->

							<!-- /section-inner -->
							
							</div><!-- /shipping-info -->
            </div>			
						


            </div><!---m row-->
          </div>
        </div><!-- /form-main-container -->


      </div><!-- /cart-block -->
    </div>

  </section>

<!-- 	<section class="section-focus bg-dark">
		<div class="container">
			
			<div class="promo-box">
				<div class="row">
					<div class="col-sm-9">
						<p><strong>Rewards Club</strong> - Reward Yourself Perfume Points Everytime You Spend</p>
					</div>
					<div class="col-sm-3">
						<a class="btn btn-default btn-lg">Start Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->


    <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->


	
	

</div><!-- /pageWrap -->




<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>


</body>
</html>
