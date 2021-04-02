
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
           .btn-default{
           	background:#e32a53 !important;;
           	color:#fff !important;
           	border-color: #e32a53 !important;

           }

          .btn-default:hover {
    background: #000 !important;
    color: #fff !important;
    border-color: #000 !important;
}

     </style>	

</head>

<body>

  <div class="pageWrap">
  	<?php include 'include/header.php'; ?>
<!-- 
	<section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li></li>
			</ul>
		</div>
	</section>  /section-banner -->
     
	<section class="section-compact">
		<div class="container">
			<div class="row">
				 <h4 class="text-center">Login Here</h4>
				<div class="col-md-4 col-md-offset-4 box-login">
					<?php if(isset($_GET['wr'])){ ?>
					<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong class="text-center">Incorrect Password !</strong> The Password you entered is incorrect please try again.
</div>
				<?php } ?>	
			
			<!--- <header class="heading-3 page-heading">
				<h4> Login</h4>
			</header>  -->
			
			<div class="form-main-container">
				<?php if (isset($_GET['succ'])) { ?>
				  <div class="alert alert-info alert-dismissible">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success !</strong> Your Account Created Successfully Login For Continue.
				  </div>
				<?php } ?>		
				<form class="checkout-form" method="POST" action="controller/user-autho.php" autocomplete="off">
					<div class="row">
						<div class="col-sm-12 form-block">
							<div class="form-group row">
								<label class="col-md-12 label-md">Email Address Or Mobile Number*</label>
								<div class="col-md-12">
									<input type="text" name="email" placeholder="Email Address Or Mobile Number" class="form-control" required="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-12 label-md">Password*</label>
								<div class="col-md-12">
									<input type="password" name="password"  placeholder="Enter Password Here" maxlength="10" class="form-control" required="">
								</div>
							</div> 
							  <a href="forgetpass.php"> Forgot  Password</a>
							 <br><br>

                            <div class="form-group row text-center">
							 <input type="submit" class="btn btn-default btn-block" value="LOGIN">
							</div>

							<br>

                            <div class="form-group row text-center text-uppercase">
							<a href="register.php">Create new account</a>
						</div>
							
							
							
						</div>
						
					</div><!-- /row -->
					

					
					
				</form>
			</div><!-- /form-main-container -->
		</div></div>
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
						<a href="index.php" class="btn btn-default btn-lg">Start Shopping</a>
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
</body>

</html>
