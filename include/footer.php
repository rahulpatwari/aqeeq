<section class="section footer-widgets bg-lighter-grey hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-4 col-xs-6">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Useful Links</h4>
								</header>
								<nav>
									<ul>
										<li><a href="index.php">Home</a></li>
										
										  <li><a href="delaer-form.php">Become a Dealer</a></li>
										  <li><a href="bulk.php">Bulk Deals</a></li>
										<li><a href="contactus.php">Contact Us</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4 hidden-xs">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Payments</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<li><a href="privacy.php">Shipping Policy</a></li>
										<li><a href="#">Cancellation & Returns</a></li>
										<li><a href="faq.php">FAQ</a></li>
										<li><a href="register.php">Register</a></li>
										<!-- <li><a href="#">Payment</a></li>
										<li><a href="#">Return Policy</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li> -->
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4 col-xs-6">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Policy</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<!-- <li><a href="privacy.php">Return Policy</a></li> -->
										<li><a href="privacy.php">Terms Of Use</a></li>
										<li><a href="privacy.php">Privacy</a></li>
										<li><a href="#">Sitemap</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
					</div>
				</div>
				<div class="col-sm-4 hidden-xs">
					<div class="widget widget-contact">
						<h4>keep in touch</h4>
						<p>Join our Newsletter for all the latest arrivals, information on product releases, competitions, news and special offers.</p>
                         
                        <!--  alert message -->
                             


						<form class="contact-widget-form" id="subscribeform" method="post" action="controller/subscribe.php">
							<div class="form-group">
							  <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" required>
							</div>
							<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section footer-widgets hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-help"></i>Inqueries</h4>
						</header>
						<!-- <p>We are here for you.</p> -->
						<nav>
							<ul>
								<li><i class="flaticon-phone72"></i>(+91) 8889289036</li>
								<li><a href="#"><i class="flaticon-email15"></i>sales@aqeeqtrading.com</a></li>
								<li><a href="#"><i class="flaticon-google125"></i>Would you like to speak live?</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-shield90"></i>Security</h4>
						</header>
						<!-- <p>Art trade is a matter of trust.</p> -->
						<ul class="list-2">
							<li><a href="#">Authenticity verification</a></li>
							<li><a href="#">Buyers’ protection</a></li>
							<li><a href="#">Privacy protection</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<!-- <h4><i class="flaticon-shipping"></i>Shipping</h4> -->
							<h4><i class="flaticon-shipping"></i>Conditions</h4>
						</header>
						<!-- <p style="display: none;">Free on orders over $75.</p> -->

						<ul class="list-2">
							<li><p style="margin-bottom: 0px;">No COD</p></li>
							<li><p style="margin-bottom: 0px;">No Replacement</p></li>
							<li><p style="margin-bottom: 0px;">No Exchange</p></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-creditcard21"></i>Payments</h4>
						</header>
						<ul class="list-cards">
							<li><a href="#"><img src="images/logo-visa.png" alt=""></a></li>
							<li><a href="#"><img src="images/logo-americanexpress.png" alt=""></a></li>
							<li><a href="#"><img src="images/logo-mastercard.png" alt=""></a></li>
							<li><a href="#"><img src="images/logo-amazon.png" alt=""></a></li>
							<li><a href="#"><img src="images/logo-paypal.png" alt=""></a></li>
						</ul>
					</div>					
				</div>
			</div>
		</div>
	</section>

       <br><br>
   <section class="section footer-widgets text-center show-xs mt-10">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-3" style="border-right: 1px solid #fff">
					<a href="index.php">
					<i class="fa fa-home"></i>
					
				    </a>
			    </div>

                <?php  


                if($varcount=='0'){?>
                <div class="col-sm-3 col-xs-3" style="border-right: 1px solid #fff">
                	<a href="http://aqeeqtrading.com/cart1.php"><i class="flaticon-shopping191"></i>
                	</a>
			    </div>
            <?php }else{?>

         <div class="col-sm-3 col-xs-3" style="border-right: 1px solid #fff">
                	<a href="http://aqeeqtrading.com/cart.php"><i class="flaticon-shopping191"></i>
                	</a>
			    </div>
			<?php }?>

			    <div class="col-sm-3 col-xs-3" style="border-right: 1px solid #fff">
			    	<a href="http://aqeeqtrading.com/my-account.php">
			    	<i class="fa fa-user-o"></i>
			        </a>	
			    </div>

			    <div class="col-sm-3 col-xs-3">
			    	<a href="http://aqeeqtrading.com/change-password.php">
			    	<i class="fa fa-cog"></i>
			        </a>	

			    </div>
			</div>
		</div>
   </section> 			    		

	