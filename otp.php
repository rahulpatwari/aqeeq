
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
			  <h4 class="text-center">Verify Your Account</h4>

			  <?php if(isset($_GET['err'])){?>
			  <div class="alert alert-danger alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Wrong !</strong> You Have Enter Wrong Otp.
			</div>
			<?php } ?>
			
			<div class="form-main-container">
				<form class="checkout-form" method="POST" action="controller/otp.php" autocomplete="off">
					<div class="row">
						<div class="col-sm-12 form-block">
							
							
							<div class="form-group row">
							<!--	<label class="col-md-12 label-md">Mobile number</label>  -->
								<div class="col-md-12">
									<input type="text" placeholder="Enter 5 Digit Otp Here"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="5" maxlength="5" class="form-control" required="" name="otp" autocomplete="off">
								</div>
							</div>
							
						
							<a href="controller/resend.php?mobile=<?php echo $_GET['id'];?>" class="pull-right">Resend Otp</a><br>
							<a href="re-mobile.php?mobile=<?php echo $_GET['id'];?>" class="pull-right">Edit Mobile No</a>
							 <br>
                             <br>
                            <div class="form-group row text-center">
							 <input type="submit" class="btn btn-default btn-block" name="verify" value="Submit">
							</div>


							
							
							
						</div>
						
					</div><!-- /row -->
					

					
					
				</form>
			</div><!-- /form-main-container -->
		</div></div>
		</div>
	</section>

	<section class="section-focus bg-dark">
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
