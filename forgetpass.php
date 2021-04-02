
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
	</section><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 box-login">

          <?php if(isset($_GET['succ'])){?>
          <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Your Reset Link Send Your Registred Email Address
        </div>
         <?php } ?>

         <?php if(isset($_GET['wr'])){?>
          <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Wrong !</strong> This Email is Not Registred
        </div>
         <?php } ?>

			 <h3>Password Assistance</h3>
              <p style="font-size: 13px;">Enter The Email Address  Associated With Your Aqeeq Account</p>
			
			<div class="form-main-container">
				<form class="checkout-form" method="POST" action="controller/forget.php" autocomplete="off">
					<div class="row">
						<div class="col-sm-12 form-block">
							<div class="form-group row">
								<label class="col-md-12 label-md">Enter Your Registered Email</label>
								<div class="col-md-12">
									<input type="email" name="email" placeholder="Email Address" class="form-control" required="">
								</div>
							</div>
							
							 
							 <br>
                            <div class="form-group row text-center">
							 <input type="submit" name="reset" class="btn btn-default btn-lg" value="Continue">
							</div>

							<br>

                            <div class="form-group row text-center text-uppercase">
							<a href="login.php">Login Account</a>
					     	</div>
					      </div>


						
					</div><!-- /row -->


					

					
					
				</form>
			</div><!-- /form-main-container -->

			<h4>Has your email or mobile number changed?</h4>
If you no longer use the email address associated with your aqeeq account, you may contact<a href="contactus.php" style="color: red"> Customer Service</a> for help restoring access to your account.
		</div></div>
		</div>
	</section>

<!-- 	<section class="section-focus bg-dark" >
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
	</section> -->


 
	 <!---footer--->
  <?php include 'include/footer.php'; ?>
  <!---footer--->


</div><!-- /pageWrap -->



<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>

 <script type="text/javascript">

  var revapi;

  jQuery(document).ready(function() {

       revapi = jQuery('.tp-banner').revolution({

        dottedOverlay:"none",
        delay:9000,
        startwidth:1170,
        startheight:700,
        hideThumbs:200,
        
        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:5,
        
        navigationType:"none",
        navigationArrows:"solo",
        navigationStyle:"",
        
        touchenabled:"on",
        onHoverStop:"on",
        
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
                    
                    
        keyboardNavigation:"on",
        
        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:20,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,
            
        shadow:0,
        fullWidth:"on",
        fullScreen:"off",

        spinner:"spinner0",
        
        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,

        shuffle:"off",
                            
        forceFullWidth:"off",           
        fullScreenAlignForce:"off",           
        minFullScreenHeight:"400",            
                    
        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,            
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,
        
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        startWithSlide:0,
        fullScreenOffsetContainer: ""

      });

  }); //ready

</script></body>

</html>
