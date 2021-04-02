
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

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

     </style>	

</head>

<body>

  <div class="pageWrap">
  	<?php include 'include/header.php'; ?>

	<!-- <section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Login</li>
			</ul>
		</div>
	</section> --> <!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<div class="row">
  <div class="col-md-3"></div>
				<div class="col-md-6 box-login">
					<?php if(isset($_GET['wr'])){ ?>
					<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong>Wrong !</strong> You Enter Wrong Email Or Password .
</div>
				<?php } ?>	
			
			<!--- <header class="heading-3 page-heading">
				<h4> Login</h4>
			</header>  -->
			
			<div class="form-main-container">
				<?php if (isset($_GET['succ'])) { ?>
				  <div class="alert alert-info alert-dismissible">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success !</strong> Your Form Submitted Successfully.
				  </div>
				<?php } ?>	
       <h3 class="text-center">Dealer Registration Form</h3>
       <br>
				<form class="checkout-form" method="POST" action="controller/vendor-form.php" autocomplete="off">
					<div class="row">
						<div class="col-sm-12 form-block">
                        <div class="form-group row">
								<label class="col-md-12 label-md">Firm Name *</label>
								<div class="col-md-12">
									<input type="text" name="firm" placeholder="Enter Firm Name " class="form-control" required="" >
								</div>
							</div>
							<div class="row" style="padding-bottom: 5px;">
                              <div class="col-sm-6 col-xs-12" style="margin-bottom: 5px;">
                                   <label class="col-md-12 label-md" style="padding-left: 0px;">First Name*</label>
								<div class="col-md-12" style="padding-left:0px;padding-right:0px;">
									<input type="text" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" name="firstname" placeholder="First Name" class="form-control" required="">
								</div>
                              </div>

                               <div class="col-sm-6 col-xs-12" style="margin-bottom: 5px;">
                                  <div class="form-group row">
								<label class="col-md-12 label-md">Last Name*</label>
								<div class="col-md-12">
									<input type="text" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');" name="lastname" placeholder="Last Name" class="form-control" required="">
								</div>
							</div>
                               </div>	
 							</div>	
							<div class="form-group row">
								<label class="col-md-12 label-md">Mobile Number *</label>
								<div class="col-md-12">
									<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="mobile" placeholder="Mobile Number " maxlength="13" minlength="10" class="form-control" required="" >
								</div>
							</div>

						<!-- 	<div class="form-group row">
								<label class="col-md-12 label-md">Phone Number *</label>
								<div class="col-md-12">
									<input type="number" name="phone" placeholder="Phone Number " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" max="15" min="9" class="form-control" required="">
								</div>
							</div> -->

							<div class="form-group row">
								<label class="col-md-12 label-md">Address *</label>
								<div class="col-md-12">
                              <input type="text" name="address" placeholder="Enter Address" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-12 label-md">Email Address </label>
								<div class="col-md-12">
									<input type="email" name="email" placeholder="Email Address" class="form-control">
								</div>
							</div>

							<!-- <div class="form-group row">
								<label class="col-md-12 label-md">Date of Birth*</label>
								<div class="col-md-12">
									<input type="date" name="dob" placeholder="Date Of Birth" class="form-control" required="">
								</div>
							</div> -->



							<div class="form-group row">
								<label class="col-md-12 label-md">Description *</label>
								<div class="col-md-12">
                                <textarea name="description" class="form-control" rows="2"></textarea>
								</div>
							</div>
							
							
                           <!--   <div class="form-group row">
                            	<label class="checkbox-inline"><input type="checkbox" value="">Terms and Conditions</label>
						   </div>
							  -->
                            <div class="form-group row text-center">
							 <input type="submit" class="btn btn-default btn-block" name="submit" value="Register">
							</div>

							

                           
							
							
							
						</div>
						
					</div><!-- /row -->
					

					
					
				</form>
			</div><!-- /form-main-container -->
		</div>
		<div class="col-md-3"></div>
           <!--   
             <div class="col-md-6 col-md-offset-1">

             	<h3>dealer form</h3>
             	
             	<ul class="about-listing">
          <li>
            <h4><i class="flaticon-parfum1"></i>The Perfume Shop</h4>
            <p>Established in 2001, The Perfume Shop are a privately owned, family run retailer of perfumes with high-street locations</p>
          </li>
          <li>
            <h4><i class="flaticon-home63"></i>Designer Fragrances, Direct From The Fragrance Houses</h4>
            <p>All of our fragrances are sourced directly from the fragrance houses themselves - no grey market products, no copies and no testers. </p>
          </li>
          <li>
            <h4><i class="flaticon-shopping191"></i>Shop With Confidence</h4>
            <p>Our low prices and unique offering are </p>
          </li>
          <li>
            <h4><i class="flaticon-cursor2"></i>Shop Online</h4>
            <p>Shop online with The Perfume Shop at www.theperfumeshop.com to find the best deals online whilst shopping conveniently</p>
          </li>
          <li>
            <h4><i class="flaticon-facebook30"></i>Shop In Store</h4>
            <p>Why not visit one of our many stores nationwide, conveniently located within most </p>
          </li>
        </ul>

             </div>	 -->

	</div>
		</div>
	</section>

	<section class="section-focus bg-dark" style="display:none">
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


 <!---footer--->
  <?php include 'include/footer.php'; ?>
  <!---footer--->

	


</div><!-- /pageWrap -->



<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>
</body>

</html>
