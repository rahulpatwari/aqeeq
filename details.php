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

  	@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

.rating { 
  border: none;
  float: left;
  
}
figure.image-zoom {
height: 250px;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin-top: 2px;
  padding:0px 5px 0px 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label {
    color: #1d1c1c;
    float: right;
    margin: 4px 1px 0px 0px;
    border-radius: 15px;
    height: 25px;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { 
  color:#f0b605 !important;
  cursor:pointer;
} /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { 
	color:#f0b605 !important;
  cursor:pointer;
} 

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

.carousel-indicators img{
     height:100px;
     width:100px;
     padding: 10px;
     margin-top: 20px;
     
 }

 .carousel-indicators {
    position: absolute !important;
    z-index: 15 !important;
    text-align: center !important;
    list-style: none !important;
    bottom: -107px !important;
    width: auto;
}


@media (max-width: 480px) {

.carousel-indicators img{
     height:70px;
     width:70px;
     padding: 5px;
     margin-top: 20px;
     
 }
}
</style>

</head>



<body>



<div class="pageWrap">

  

  

 <?php include 'include/header.php'; ?>

<?php



include_once("config.php");





//current URL of the Page. cart_update.php redirects back to this URL

 $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

						
 <!-- <section class="section-banner">

    <div class="container">

      <ul class="breadcrumb">

        <li><a href="index.html">Home</a></li>

        <li><a href="#">Product Dtails</a></li>

        <li>

          <div class="bar-form">

            <form method="GET" action="products.php">

              <input type="search" name="search" placeholder="Search Perfumes">

              <input type="submit">

            </form>

          </div>

        </li>

      </ul>

    </div>

  </section> --> <!-- /section-banner -->



	<section class="section-compact">

		<div class="container">



			<div class="single-container">

				<div class="product-single">

				  <div class="featured-box">

				    <div class="row">

				      <div class="col-sm-5" style="padding-bottom:100px;">

				         <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

 			<?php
              require_once('owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where id = '$get_id'"); 
              while($datas_fimg = mysqli_fetch_array($sqls_fimage)){ ?>
      <div class="item active">
        <img src="product/<?php echo htmlspecialchars($datas_fimg['f_newfile']); ?>" alt="Los Angeles" style="width:100%;">
        
      </div>
  <?php } ?>
<?php
              require_once('owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sqls_simage = mysqli_query($con,"Select * from `slider_image` where product_id= '$get_id'"); 
              while($datas_simg = mysqli_fetch_array($sqls_simage)){ ?>
      <div class="item">
        <img src="slider_image/<?php echo htmlspecialchars($datas_simg['image'])?>" style="width:100%;">
        
      </div>
    <?php } ?>
      <!-- <div class="item">
        <img src="https://cdn2.stylecraze.com/wp-content/uploads/2013/11/1719_Best-Gucci-Perfumes-%E2%80%93-Our-Top-10.jpg" alt="New York" style="width:100%;">
        
      </div> -->
  
    </div>

    
  </div>
  <div class="col-md-12">
  <ol class="carousel-indicators clearfix">
 
      <?php
              require_once('owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where id = '$get_id'"); 
              while($datas_fimg = mysqli_fetch_array($sqls_fimage)){ ?>
        <img data-target="#myCarousel" data-slide-to="0" src="product/<?php echo htmlspecialchars($datas_fimg['f_newfile']); ?>"  width="100" height="100">
     <?php 
      $get_ship_amount=$datas_fimg['shipment'];
      if ($get_ship_amount=='0') {
      	 $get_ship = 'Free Shipping';
      }
      else{
      	 $get_ship = "INR $shipping_cost_get.00 (All Over India)";
      }
 } ?>
      
      <?php
              require_once('owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sno=1;
              $sqls_simage = mysqli_query($con,"Select * from `slider_image` where product_id = '$get_id'"); 
              while($datas_simg = mysqli_fetch_array($sqls_simage)){ ?>
      <img data-target="#myCarousel" data-slide-to="<?php echo $sno++?>" src="slider_image/<?php echo htmlspecialchars($datas_simg['image'])?>" width="100" height="100">
     
     <?php } ?>


     <!--   <img src="https://cdn2.stylecraze.com/wp-content/uploads/2013/11/1719_Best-Gucci-Perfumes-%E2%80%93-Our-Top-10.jpg" data-target="#myCarousel" data-slide-to="2"  width="100" height="100"> -->
      
      
      
    </ol>
    </div>
  </div>

<?php

include"config.php";

if (isset($_GET['id'])) {

	$id=$_GET['id'];

$results = $mysqli->query("SELECT * FROM products where id='$id' and status='active' order by id desc ");

}elseif(isset($_GET['search'])){

    $search=$_GET['search'];

	$results = $mysqli->query("SELECT * FROM products where product_name like '%$search%' and status='active' order by id desc");



}else  {

$results = $mysqli->query("SELECT * FROM products where status='active' order by id desc ");

}

if($results){ 

	$products_item = '';



//fetch results set as object and output HTML

while($obj = $results->fetch_object())

{
	 if($obj->quantity >= 1)
	{
        $quantity="<span><strong style='color:green !important;font-weight:900 !important'><small>In Stock</small></strong></span>  <br>";
        $add="<input type='submit' class='btn btn-default  col-md-5' style='padding: 7px;' value='Add To Cart'></input>";
	}
	else{
		$quantity="<span><strong style='color:red !important;font-weight:900 !important'><small>Out Of Stock</small></strong></span>  <br>";
	}
	  if(!empty($obj->offer))
	{
		$off_price="<span><strong style='color:#cc6b18 !important;font-weight:900 !important'><big>Offer Price:- INR  {$obj-> offer }.00</big></strong></span>  <br><br>";
	}
	else{
        $off_price='';
	}
	if (!empty($obj->offer)) {
		$price="Price:- INR <del> {$obj-> price }.00</del>";
	}
	else{
       $price="<strong><big>Price:- INR {$obj-> price }.00</big></strong>";
	}

	$products_item .= <<<EOT



				      <div class="col-sm-7">

				        <div class="text">

				          <h4 style="text-transform: capitalize;">{$obj->brand} {$obj->product_name}</h4><br>
                               
				          	<h5>
                            $off_price
                              $price
				         
                            
				          	</h5>
				          	
                           <h5>Shipping Charges :- $get_ship</h5>
                           $quantity
				          </p>

				          <form action="cart_update.php" method="POST">



											



	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />

	<input type="hidden" name="shipment" value="{$obj->shipment}" />

	<input type="hidden" name="type" value="add" />

	<input type="hidden" name="return_url" value="{$current_url}" />



<script>

function myFunction() {

    alert("Your product is added on cart go to view your cart !");

}

</script>

		<div class="row">

		<strong class="col-md-1" style="color:black;">Qty &nbsp;</strong><input class="col-md-5" type="number" size="2" style="width: 20%; height: 42px;" name="product_qty" placeholder="Quantity" min="1" value="1" />

			<a href="" class="col-md-1" style="padding: 0px;"></a>
               $add
				<!-- <input type="submit" class="btn btn-default  col-md-5" style="padding: 7px;" value="Add To Cart"></input> -->

			</div>

				</div>

				</form>

				  <hr>

				<h4 style="text-transform: capitalize;">Product Description</h4>

				    <p>{$obj-> product_desc }</p>

EOT;

}

$products_item .= '</ul>';

echo $products_item;

}

?> 
<?php
require_once('owner/autho/data-autho.php');
$msg_id=htmlspecialchars($_GET['id']);
$sql="SELECT * FROM review WHERE msg_id='$msg_id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

$res = mysqli_query($con,"SELECT sum(rating) FROM review where msg_id = '$msg_id' ");
$row = mysqli_fetch_row($res);
$total_amounts = $row[0];
$aggreage_rating=$total_amounts/$count;
?>


				    <P>

				       <div class="row">
                              <div class="col-md-3">

								<?php for ($i=1; $i <= $aggreage_rating; $i++) { ?>
								<label class="" for=""><i class="fa fa-star review-rating"></i> </label>
								<?php } ?>
								
								

							  </div>
							  
							<div class="col-md-6 " style="color:#f0b605">
							  <span style="font-size:16px;"><?php echo $count; ?></span> Rating
							</div>  	
								
					
					</div>
				    </P>

				    </div>

				    </div>




				      				            







				    </div>

				  </div><!-- /featured-box -->
				</div><!-- /product-single -->



<div class="row">

	<div class="col-md-6">
		<div class="comments-area">
						<h4>Post a Review</h4>
						<form action="controller/add-review.php" method="POST" class="comment-form">
							<div class="row">

								<div class="col-sm-12">
									<label>Share Rating</label><br>
                                   <!-- Rating Stars Box -->
                    <fieldset class="rating">
								<input type="radio" id="field1_star5" name="rating1" value="5" /><label class = "full" for="field1_star5"></label>
								
								<input type="radio" id="field1_star4" name="rating1" value="4" /><label class = "full" for="field1_star4"></label>
								
								<input type="radio" id="field1_star3" name="rating1" value="3" /><label class = "full" for="field1_star3"></label>
								
								<input type="radio" id="field1_star2" name="rating1" value="2" /><label class = "full" for="field1_star2"></label>
								
								<input type="radio" id="field1_star1" name="rating1" value="1" /><label class = "full" for="field1_star1"></label>
								
					</fieldset>

								</div><br><div class="clearfix"></div><br>

								<div class="col-sm-6">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name">
								</div>
								<div class="col-sm-6">
									<label>Your Email</label>
									<input type="email" class="form-control" required="" name="email">
								</div>
								<div class="col-sm-12">
									<label>Your Message</label>
									<textarea class="form-control" placeholder="write message here" name="review_msg"></textarea>
								</div>
								<input type="hidden" name="page_id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
								<div class="col-sm-12">
									<input type="submit" name="submit" class="btn btn-default btn-block" value="Post Reveiw">
								</div>
							</div>
						</form>
					</div>

				</div>

					<div class="col-md-6">


				    <div class="comments-area">
						<h4>Reviews</h4>
						<br>
						<ul class="comments-list">
							<?php
			                require_once('owner/autho/data-autho.php');
			                $msg_id=htmlspecialchars($_GET['id']);
							$userreview = mysqli_query($con,"Select * from review where msg_id ='$msg_id'");
    						while($ureview = mysqli_fetch_array($userreview)){

							?>
							<li>
								<div class="comment-box">
									<div class="media">
										<div class="media-left">
											<img class="media-object" src="images/resource/snap-3.jpg" alt="alt">
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="#"><?php echo htmlspecialchars(ucwords($ureview['name'])); ?></a></h4>
											<p class="comment-date"><?php echo htmlspecialchars(ucwords($ureview['date'])); ?></p>
											<p><?php echo htmlspecialchars($ureview['review_msg']); ?></p>
										
										</div>
									</div>
								</div><!-- /comment-box -->
								
								

							</li>
						 <?php } ?>	
						
						</ul>
					</div>

				</div>


</div>				



	      <div class="other-products">

		      <header class="heading">

		        <span class="caro-prev other-prev"><i class="flaticon-arrowhead7"></i></span>

		        <span class="caro-next other-next"><i class="flaticon-arrow487"></i></span>

		        <h4>Other Products</h4>

		      </header>

		      <div class="carousel-multiple owl-carousel">

		      	    <?php

              require_once('owner/autho/data-autho.php');

              $sqls = mysqli_query($con,"Select * from `products` order by id desc"); 

              while($datas = mysqli_fetch_array($sqls)){ ?>

		        <div class="item">

		          <div class="thumbnail thumbnail-product">

		            <figure class="image-zoom">

		              <img alt="image" src="product/<?php echo htmlspecialchars(ucwords($datas['f_newfile'])); ?>" height="267" width="265">

		            </figure>

		            <div class="caption text-center">

		              <h5><a href="details.php?id=<?php echo htmlspecialchars(ucwords($datas['id'])); ?>"><?php echo htmlspecialchars(ucwords($datas['brand']))." ".htmlspecialchars(ucwords($datas['product_name'])); ?></a></h5>

		              <div class="rating-star" style="display: none;">

		                <i class="flaticon-favourites7 selected"></i>

		                <i class="flaticon-favourites7 selected"></i>

		                <i class="flaticon-favourites7 selected"></i>

		                <i class="flaticon-favourites7"></i>

		                <i class="flaticon-favourites7"></i>

		              </div><!-- /rating-star -->

		              <p class="prod-price text-primary">INR <?php echo htmlspecialchars(ucwords($datas['price'])); ?>.00</p>

		            </div>

		          </div><!-- /thumbail -->

		        </div>

		    <?php } ?>

		  



		      </div>

				</div><!-- /other-products -->

			

			

			</div><!-- /single-container -->

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

$("label").click(function(){
  $(this).parent().find("label").css({"color": "#D8D8D8"});
  $(this).css({"color": "#f0b605"});
  $(this).nextAll().css({"color": "#f0b605"});
});

</script>


</body>



</html>

