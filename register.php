
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

	 <section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li></li>
			</ul>
		</div>
	</section>   <!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 box-login">
			<!-- <header class="heading-3 page-heading">
				<h4> Register</h4>
			</header> -->
			<?php
			if (isset($_GET['already'])) {
				echo ' <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Already !</strong> Your Account Already Registered.
  </div>';
			}
			?>

			  <h4 class="text-center">Register Here</h4>
			
			<div class="form-main-container">
				<form class="checkout-form" method="POST" action="controller/add-user.php" autocomplete="off">
					<div class="row">
						<div class="col-sm-12 form-block">
							<div class="form-group row">
								<!-- <label class="col-md-12 label-md">Your name*</label> -->
								<div class="col-md-12">
									<input type="text"  placeholder="Your Name" class="form-control" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" required="" name="name" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
							<!--	<label class="col-md-12 label-md">Mobile number</label>  -->
								<div class="col-md-12">
									<input type="text" placeholder="Mobile Number" required pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" class="form-control" required="" name="mobile" autocomplete="off">
								</div>
							</div>
							
							<div class="form-group row">
							<!--	<label class="col-md-12 label-md">Email Address*</label> -->
								<div class="col-md-12">
									<input type="email" placeholder="Email Address" class="form-control" name="email" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
							<!--	<label class="col-md-12 label-md">Password*</label>  -->
								<div class="col-md-12">
									<input type="password"  placeholder=" Password At Least 6 Characters" maxlength="15" class="form-control" required="" name="password" id="pass1" onkeyup="checkPass();"" return false; >
									<div id="error-nwl"></div>
								</div>
							</div> 
							   
							 <br>

                            <div class="form-group row text-center">
							 <input type="submit" class="btn btn-default btn-block" name="register" value="Register">
							</div>


                            <div class="form-group row text-center text-uppercase">
							<a href="login.php">I have an account</a>
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
