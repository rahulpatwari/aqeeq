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
										<li><a href="edit-contact-data.php" class="text-primary">Edit Contact Data</a></li>
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
									
									<?php if(isset($_GET['psdwr'])){?>
										<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Wrong !</strong> You Have Enter Wrong Password
</div>
									<?php } ?>

									<?php if(isset($_GET['psd'])){?>
										<div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong> Password Reset Successfully !
</div>
									<?php } ?>
								
									<div  class="form-section-box">
										<form class="edit-password-form" method="POST" action="controller/reset.php">
											<h5>Change Password</h5>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">Previous Password</label>
		                    <div class="col-md-9">
		                      <input type="password" class="form-control" name="prev_password" placeholder="Previous Password" required="">
		                    </div>
		                  </div>
											<div class="form-group row">
		                    <label class="col-md-3 label-md">New Password</label>
		                    <div class="col-md-9">
		                      <input type="password" class="form-control" placeholder="New Password" name="new_password" id="pass1" onkeyup="checkPass();"" return false;  required="">
		                    </div>
		                  </div>
											<input type="submit" name="reset_password" class="btn btn-default btn-lg" value="Save">
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

	<!-- <section class="section-focus bg-dark">
		<div class="container">
			
			<div class="promo-box">
				<div class="row">
					<div class="col-sm-9">
						<p><strong>Rewards Club</strong> - Reward yourself Perfume Points everytime you spend</p>
					</div>
					<div class="col-sm-3">
						<a class="btn btn-default btn-lg">Start Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</section>

 -->
    <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->


	
	

</div><!-- /pageWrap -->




<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>





<script type="text/javascript"> 
function checkPass()
{
    var pass1 = document.getElementById('pass1');
   
    var message = document.getElementById('error-nwl');
    var goodColor = "#ffffff";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 5)
    {
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
    else
    {
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit!"
        return;
    }
  
 //    if(pass1.value == pass2.value)
 //    {
 //        pass2.style.backgroundColor = goodColor;
 //        message.style.color = goodColor;
 //        message.innerHTML = "ok!"
 //    }
	// else
 //    {
 //        pass2.style.backgroundColor = badColor;
 //        message.style.color = badColor;
 //        message.innerHTML = " These passwords don't match"
 //    }
}
  
</script>
</body>
</html>
