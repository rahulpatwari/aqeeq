<!--author: W3layoutsauthor URL: http://w3layouts.comLicense: Creative Commons Attribution 3.0 UnportedLicense URL: http://creativecommons.org/licenses/by/3.0/--><!DOCTYPE html><html><head>	<meta name="theme-color" content="#e32a53" />  <title>Aqeeq</title><!-- for-mobile-apps --><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>View shopping cart</title><link href="style/style.css" rel="stylesheet" type="text/css"></head><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);		function hideURLbar(){ window.scrollTo(0,1); } </script><!-- //for-mobile-apps --><link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- font-awesome icons --><link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> <!-- //font-awesome icons --><!-- js --><script src="js/jquery-1.11.1.min.js"></script><!-- //js --><link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'><!-- start-smoth-scrolling --><script type="text/javascript" src="js/move-top.js"></script><script type="text/javascript" src="js/easing.js"></script><script type="text/javascript">	jQuery(document).ready(function($) {		$(".scroll").click(function(event){					event.preventDefault();			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);		});	});</script><!-- start-smoth-scrolling --> </head><!-- products-breadcrumb -->	<div class="products-breadcrumb">		<div class="container">			<ul>						</ul>		</div>	</div><!-- //products-breadcrumb --><!-- banner -->	<div class="banner">		<div class="w3l_banner_nav_left">			<nav class="navbar nav_bottom">			 <!-- Brand and toggle get grouped for better mobile display -->			  <div class="navbar-header nav_2">				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">					<span class="sr-only">Toggle navigation</span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>				  </button>			   </div> 			</nav>		</div>		<div class="w3l_banner_nav_right">			<div style=" background-image: url('images/page-title.jpg'); background-size: cover; height: 250px;background-position: center;">				<h1 class="w3l_fruit" style = "text-align:center; font-weight:40px; margin-bottom:40px; margin-top: 40px;     margin-top: 0px;padding-top: 52px;color: white;font-size: 42px;   background-position: 50% 80%;"><?php echo htmlspecialchars($_GET['sub']); ?></h1>			</div>	<!-- events -->		<div class="events">	<!--start php code--><?phpsession_start();include_once("config.php");?><h1 align="center">View Cart</h1><div class="cart-view-table-back text-center" ><form method="post" action="cart_update.php"><table width="100%"  cellpadding="6" cellspacing="0" class="table-responsive text-center"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>  <tbody> 	<?php	if(isset($_SESSION["cart_products"])) //check session var    {		$total = 0; //set initial total value		$b = 0; //var for zebra stripe table 		foreach ($_SESSION["cart_products"] as $cart_itm)        {			//set variables to use in content below			$product_name = $cart_itm["product_name"];			$product_qty = $cart_itm["product_qty"];			$product_price = $cart_itm["product_price"];			$product_code = $cart_itm["product_code"];			//$product_color = $cart_itm["product_color"];			$subtotal = ($product_price * $product_qty); //calculate Price x Qty					   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 		    echo '<tr class="'.$bg_color.'">';			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';						echo '<td>'.$product_name.'</td>';			echo '<td>'.$currency.$product_price.'</td>';			echo '<td>'.$currency.$subtotal.'</td>';			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';            echo '</tr>';			$total = ($total + $subtotal); //add subtotal to total var        }				$grand_total = $total + $shipping_cost; //grand total including shipping cost		foreach($taxes as $key => $value){ //list and calculate all taxes in array				$tax_amount     = round($total * ($value / 100));				$tax_item[$key] = $tax_amount;				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total		}				$list_tax       = '';		// foreach($tax_item as $key => $value){ //List all taxes		// 	$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';		// }		$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	}    ?>    <tr><td colspan="5"><span style="float:right;text-align: right;"><?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>    <tr><td colspan="5"><a href="payment.php" class="button">Order</a> <a href="index.php" class="button">Add More Items</a><button type="submit" class = "button">Update</button></td></tr>  </tbody></table><input type="hidden" name="return_url" value="<?php $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);echo $current_url; ?>" /></form></div><!--end php code -->		</div><!-- //events -->		</div>		<div class="clearfix"></div>	</div><!-- //banner -->