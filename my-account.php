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
 
       
        <?php  require_once('owner/autho/data-autho.php');?>
                 <?php $data = mysqli_query($con,"Select * from `user` where user_id ='$user_id'");
      while($row = mysqli_fetch_array($data)){
        $wallet_amount=$row['wallet'];
      } ?>
           <?php if($wallet_amount==0){?>
           	 <button class="btn"style="background: #1E90BC;color: #fff;">Wallet Amount : ₹ 00</button>
           	<?php }else {?>
          <button class="btn"style="background: #1E90BC;color: #fff;">Wallet Amount : ₹ <?php echo $wallet_amount;?></button>
      <?php }?>
          <br>
       <br>
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
							<!-- <?php if ($_SESSION['login_user']==$email) {
								
							} ?> -->
								<div class="section-inner">
									<h5>My Orders</h5>
									<p>No item matches the selected filter.</p>
								
								</div><!-- /section-inner -->
							</div><!-- /shipping-info -->
            </div>
            <div class="col-sm-8">
            	<div class="row">
                        
            	      <div class="col-md-6 bg-lights">
        		<div class="row">
        			<div class="col-md-4">
		    	<img class="img-responsive" src="./img/Box._CB476333696_.png" alt="" >
			 </div>	

			<div class="col-md-8">
				    <a href="order-history.php">
			        <h5 class=""> Your Orders</h5>
			        <span class="float-right"> Track, return, or buy things again</span>
			       </a>
			    </div>
			</div>    
		  </div><!----->


		  <div class="col-md-6 bg-lights">
        		<div class="row">
        			<div class="col-md-4">
		    	<img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/G/39/x-locale/cs/ya/images/sign-in-lock._CB476739868_.png" alt="" >
			 </div>	

			<div class="col-md-8">
				    <a href="change-password.php">
			        <h5 class=""> Login & security</h5>
			        <span class="float-right"> Edit login, name, and mobile number</span>
			         </a>
			    </div>
			</div>    
		  </div> <!------>   

		        <br>
		        <div class="clearfix"></div> <!----->	


		         <div class="col-md-6 bg-lights">
        		<div class="row">
        			<div class="col-md-4">
		    	<img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/G/39/x-locale/cs/ya/images/address-map-pin._CB476740045_.png" alt="" >
			 </div>	

			<div class="col-md-8">
				    <a href="edit-contact-data.php">
			        <h5 class="">  Your Addresses</h5>
			        <span class="float-right"> Edit addresses for orders</span>
			        </a>
			    </div>
			</div>    
		  </div> <!------>   

		   <div class="col-md-4 bg-lights">
        		<div class="row">
        			<div class="col-md-4">
		    	<img class="img-responsive" src="https://crfusa.com/app/uploads/2018/10/icon-process-referral-partner.png" alt="" >
			 </div>	

			<div class="col-md-8">
					    <a href="earn-referal.php">			
			        <h5 class=""> Earn More</h5>
			        <span class="float-right">Create Refereal And Earn More</span>
			    </a>
			    </div>
			</div>    
		  </div> <!------>   	  	 


            	</div>	


            </div><!---row--->				
						


            </div><!---m row-->
          </div>
        </div><!-- /form-main-container -->


      </div><!-- /cart-block -->
    </div>

  </section>
<!-- 
	<section class="section-focus bg-dark">
		<div class="container">
			
			<div class="promo-box">
				<div class="row">
					<div class="col-sm-9">
						<p><strong>Rewards Club</strong> - Reward yourself Perfume Points everytime you spend</p>
					</div>
					<div class="col-sm-3">
						<a href="index.php" class="btn btn-default btn-lg">Start Shopping</a>
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
