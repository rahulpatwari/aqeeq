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
	 <style>
	 	.layout-grid {
	 		display: block !important;
	   }
	   .slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}	
figure.image-zoom {
    height: 220px;
    width: 100%;
    padding: 0px;
}

.w-60{
	width: 30%;
	float: right;
}


@media (max-width: 480px){

	.w-60{
	width: 100% !important;
	float: right !important;

}
	}
	 </style> 	


	
</head>
<body>

<div class="pageWrap">
	
    <?php include 'include/header.php'; ?>


	<div class="section-banner" style="display: none;">
		<div class="container">
			<ul class="breadcrumb">
				<li><select class="form-control" onchange="javascript:location.href = this.value;">
							<option>Filter Product</option>
							<option value="products.php?sub=Attar&amp;filter=low">Price: Low to High</option>
							<option value="products.php?sub=Attar&amp;filter=high">Price: High to Low</option>
							<option value="products.php?sub=Attar&amp;filter=new">Newest Arrivals</option>
						</select>
				</li>
				<li>
					<div class="bar-form">
						   <form method="GET" action="products.php">
              <input type="search" name="search" placeholder="Search Perfumes">
              <input type="submit">
            </form>
					</div><!-- /bar-form -->
				</li>
			</ul>
		</div>
	</div><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">

          



							<!-- <?php if(!isset($_GET['search'])){?>
		
			<header class="heading-3 page-heading">
				<h4> <?php echo $get_sub = htmlspecialchars($_GET['sub']) ?> <small>(<?php
					require_once('owner/autho/data-autho.php');
					$sql="SELECT * FROM products WHERE sub='$get_sub'";
					$result=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					echo $count=mysqli_num_rows($result);
										?>)</small></h4>
			</header>
		<?php } ?> -->
			
			<div class="row">
				<div class="col-md-3">
<form action="products.php?allfilter" method="POST">
				 <div class="btn btn-primary btn-block sho"><i class="fa fa-filter" aria-hidden="true"></i> &nbsp;Filter</div>
				 <br><br>		
             <div id="hidd">

             <div class="widget widget-prod-filter">
						<header class="widget-heading-3">
							<h4>
								<span class="caret"></span>
								By Product
								
							</h4>
						</header>
						
						<ul class="brands-filter-brands">
							<?php  if(isset($_GET['sendfilter'])){
								 $gfil_value = $_POST['filter']; 
								 $str=str_replace("'", '',$gfil_value);
								 $gfilter_value = explode (", ", $str);
								
								
							}
                       else{
							$gfilter_value = $_POST['filter']; 
                           }
							?>
								<?php
            require_once('owner/autho/data-autho.php'); 
            $sub_sql = mysqli_query($con,"Select * from sub where cat='Products' order by id asc");
            while($sub = mysqli_fetch_array($sub_sql)){ ?>
							<li>
								<div class="checkbox"><label><input type="checkbox" name="filter[]" value="<?php echo $sub['sub']; ?>"      

									<?php 
									if (in_array($sub['sub'], $gfilter_value))
									  {
									  echo "checked";
									  }
									?>

									<?php 
									if ($sub['sub']==$_GET['sub'])
									  {
									  echo "checked";
									  }
									?>



									><?php echo $sub_name=$sub['sub']; ?></label> <span class="right"><?php
					require_once('owner/autho/data-autho.php');
					$sql_s="SELECT * FROM products WHERE sub='$sub_name' and status='active'";
					$result_s=mysqli_query($con,$sql_s);
					$row_s=mysqli_fetch_array($result_s,MYSQLI_ASSOC);
					 $count_s=mysqli_num_rows($result_s);
										?></span></div>
							</li>
				<?php } ?>				
	

							
						</ul>

				<!-- 	<button type="submit" class="btn btn-default view-detail col-md-12" style="padding: 8px;">Filter Product</button> --><!-- <br> -->
					</div><!-- /widget-prod-filter -->

			<!-- 	</form> -->

					<div class="widget widget-prod-categrories">
						<header class="widget-heading-3">
							<h4>
								<span class="caret"></span>
								By Brand
								<em></em>
							</h4>
						</header>
<!--                 <form action="products.php?brand"method="POST">
 -->                	
   	<?php  if(isset($_GET['sendfilter'])){
								 $bfil_value = $_POST['brand']; 
								$strb=str_replace("'", '',$bfil_value);
								 $bfilter_value = explode (", ", $strb);
								
							}
                       else{
							$bfilter_value = $_POST['brand'];
                           }
							?>

         

						<ul class="brands-filter-brands">
							<?php
            require_once('owner/autho/data-autho.php'); 
            $sql = mysqli_query($con,"Select * from brand order by id asc");
            while($brand = mysqli_fetch_array($sql)){ ?>

            	        
								<li>
								<div class="checkbox"><label><input type="checkbox" class="brand" name="brand[]" id="checkItem" value="<?php echo $brand['brand_name']; ?>" 
                                    <?php 
									if (in_array($brand['brand_name'], $bfilter_value))
									  {
									  echo "checked";
									  }
									?>

									<?php if($brand['brand_name']==$_GET['get_brand']){echo 'checked';}?>

									><?php echo $b_name=$brand['brand_name']; ?><!-- <span class="right"><?php
					require_once('owner/autho/data-autho.php');
					$sql_b="SELECT * FROM products WHERE brand='$b_name'";
					$result_b=mysqli_query($con,$sql_b);
					$row_b=mysqli_fetch_array($result_b,MYSQLI_ASSOC);
					echo $count_b=mysqli_num_rows($result_b);
							
									?></span> --></label> </div>
							</li>

						<?php } ?>
						<li><div class="checkbox"><label><input type="checkbox" id="checkall">
								Select All Brand
							</label> </div> </li>	
						</ul>

				<!-- 	<button type="submit" class="btn btn-default view-detail col-md-12" style="padding: 8px;">Filter Brand</button> --><!-- <br> -->
					<!-- 	</form> -->
					<!-- 	<ul class="list-align">
							<?php
            require_once('owner/autho/data-autho.php'); 
            $sub_sql = mysqli_query($con,"Select * from sub order by id asc");
            while($sub = mysqli_fetch_array($sub_sql)){ ?>
							<li><a href="products.php?sub=<?php echo $sub['sub']; ?>"><?php echo $sub_name=$sub['sub']; ?> <span class="right"><?php
					require_once('owner/autho/data-autho.php');
					$sql_s="SELECT * FROM products WHERE sub='$sub_name'";
					$result_s=mysqli_query($con,$sql_s);
					$row_s=mysqli_fetch_array($result_s,MYSQLI_ASSOC);
					echo $count_s=mysqli_num_rows($result_s);
										?></span></a></li>
			<?php } ?>				
						</ul> -->
						<!-- <div class="widget-bottom">
							<strong class="refine-filters">Refine</strong>
							
						</div> -->
						
					</div><!-- /widget-prod-categrories -->
                  


 <div class="filter-bar row" style="display: none">
						 	<div class="col-md-8 col-xs-8" style="padding: 0px;">	
<!-- 						 	<form action="products.php" method="GET">	
 -->						 							<input type="search" class="form-control" name="search" placeholder="Search">
</div>
						 	<div class="col-md-4 col-xs-4">
					<button type="submit" class="btn btn-default view-detail col-md-12" style="padding: 8px;">Find</button><br>
						 	</div>
						 							 	</form>						

						</div><!-- /filter-bar -->

<div class="widget widget-prod-categrories">
						<header class="widget-heading-3">
							<h4>
								<span class="caret"></span>
								By Category
								<em></em>
							</h4>
						</header>
<!--                 <form action="products.php?gender"method="POST">
 -->                	<?php    

                  if(isset($_GET['sendfilter'])){
								 $hfil_value = $_POST['gender']; 
								$strh=str_replace("'", '',$hfil_value);
								 $gefilter_value = explode (", ", $strh);
								
							}
                       else{

     $gefilter_value = $_POST['gender'];  

 }
 ?> 
						<ul class="brands-filter-brands">
							<?php
            require_once('owner/autho/data-autho.php'); 
            $sql = mysqli_query($con,"Select DISTINCT gender from products order by gender");
            while($gen = mysqli_fetch_array($sql)){ ?>
								<li>
								<div class="checkbox"><label><input type="checkbox" name="gender[]" value="<?php echo $gen['gender']; ?>" 
                                    <?php 
									if (in_array($gen['gender'], $gefilter_value))
									  {
									  echo "checked";
									  }
									?>

									><?php $b_name=$gen['gender']; 
                                     if ($b_name=='Female') {
                                     	echo "Women";
                                     }elseif ($b_name=='Male') {
                                     	echo "Men";
                                     }elseif ($b_name=='Unisex') {
                                     	echo "Unisex";
                                     }



									?><!-- <span class="right"><?php
					require_once('owner/autho/data-autho.php');
					$sql_b="SELECT * FROM products WHERE brand='$b_name'";
					$result_b=mysqli_query($con,$sql_b);
					$row_b=mysqli_fetch_array($result_b,MYSQLI_ASSOC);
					echo $count_b=mysqli_num_rows($result_b);
										?></span> --></label> </div>
							</li>
						
						<?php } ?>	
						</ul>

					<button type="submit" class="btn btn-default view-detail col-md-12" style="padding: 8px;">Filter</button><br>
						
					
						
					</div><!-- /widget-prod-categrories -->
<!-- 
<div class="widget widget-prod-filter-price">
						<header class="widget-heading-3">

<select class="form-control" onchange="javascript:location.href = this.value;">
							<option>Filter Product By Price Range</option>
							<option value="products.php?fill=low">Price: Low to High</option>
							<option value="products.php?fill=high">Price: High to Low</option>
							<option value="products.php?fill=new">Newest Arrivals</option>
						</select>
				
</header>
</div>
 -->




					
				<!-- 	<br> --><!-- <div class="widget widget-prod-filter-price">
						<header class="widget-heading-3">
							<h4>
								<span class="caret"></span>
								Price
								
							</h4>
						</header>

            <div class="slidecontainer">
  <form action="products.php" method="GET">          	
  <input type="range" name="price_filter" min="1" max="2000" value="<?php
  if(isset($_GET['price_filter'])){
  	echo htmlspecialchars($_GET['price_filter']);
  }
  else{
  	echo '100';
  }
  ?>" class="slider" id="myRange">
  <p>Price: <span id="demo"></span></p>
  <button type="submit" class="btn btn-default view-detail col-md-12" style="padding: 8px;">Filter Price Range</button>
</form>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
</div> -->
<!-- /slider-contain -->

					

					 </div>
</form>
				</div>
				<div class="col-md-9">
					

					    <div class="w-60">
					    	<select class="form-control" onchange="javascript:location.href = this.value;">
							<option>Sort Product By Price Range</option>
							<option value="products.php?fill=low">Price: Low to High</option>
							<option value="products.php?fill=high">Price: High to Low</option>
							<!-- <option value="products.php?fill=new">Newest Arrivals</option> -->
						</select>  
                
					</div>
					<div class="clearfix"></div>
					<div class="filter-head">
					<!--	<strong><select class="form-control" onchange="javascript:location.href = this.value;">
							<option>Filter Product</option>
							<option value="products.php?sub=<?php echo htmlspecialchars($_GET['sub']); ?>&filter=low">Price: Low to High</option>
							<option value="products.php?sub=<?php echo htmlspecialchars($_GET['sub']); ?>&filter=high">Price: High to Low</option>
							<option value="products.php?sub=<?php echo htmlspecialchars($_GET['sub']); ?>&filter=new">Newest Arrivals</option>
						</select></strong> -->
						<ul class="filter-tabs">
							<!-- <li class="filter active" data-role="button" data-filter="popularity">Popularity</li>
							<li class="filter" data-role="button" data-filter="bestsellers">Bestsellers</li>
							<li class="filter" data-role="button" data-filter="pricefresh">Pricefresh</li>
							<li class="filter" data-role="button" data-filter="arrivals">Arrivals</li>
							<li class="filter" data-role="button" data-filter="rating">Customer Rating</li> -->
							
							<!--<li class="layout-list" data-role="button"><i class="flaticon-menu10"></i></li>
							<li class="layout-grid active" data-role="button"><i class="flaticon-nine15"></i></li> -->

						</ul>
					</div><!-- /filter-head -->
					<ul class="filter-list">

<?php

include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
 $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
						<?php
include"config.php";

if(isset($_GET['search'])){
    $search=$_GET['search'];
	$results = $mysqli->query("SELECT * FROM products where product_name like '%$search%' and status='active' order by id desc");
}
elseif(isset($_GET['get_brand']))  {
$sub=$_GET['get_brand'];	
$results = $mysqli->query("SELECT * FROM products where brand='$sub' and status='active' order by serial_no +0 asc");
}

elseif($_GET['fill']=='low')  {
$sub=$_GET['sub'];	
$results = $mysqli->query("SELECT * FROM products where status='active' order by offer asc ");
}
elseif($_GET['fill']=='high')  {
$sub=$_GET['sub'];	
$results = $mysqli->query("SELECT * FROM products where status='active' order by offer desc ");
}
elseif($_GET['fill']=='new')  {
$sub=$_GET['sub'];	
$results = $mysqli->query("SELECT * FROM products where status='active' order by id desc ");
}
elseif (isset($_GET['sub'])) {
	$sub=$_GET['sub'];
$results = $mysqli->query("SELECT * FROM products where sub='$sub' and status='active' order by 	serial_no +0 asc");
}
elseif (isset($_GET['filter'])) {
$gfilter_value = $_POST['filter'];	

$result = "'" . implode ( "', '", $gfilter_value ) . "'";


$results = $mysqli->query("SELECT * FROM products where sub IN($result) and status='active' order by id desc ");
}elseif(isset($_GET['brand'])){
  $bfilter_value = $_POST['brand'];	
 $result = "'" . implode ( "', '", $bfilter_value ) . "'";


$results = $mysqli->query("SELECT * FROM products where brand IN($result) and status='active' order by id desc ");
}
elseif(isset($_GET['gender'])){
  $gefilter_value = $_POST['gender'];	
 $result = "'" . implode ( "', '", $gefilter_value ) . "'";


$results = $mysqli->query("SELECT * FROM products where gender IN($result) and status='active' order by id desc ");
}
elseif (isset($_GET['price_filter'])) {
	$price_filter=htmlspecialchars($_GET['price_filter']);
	$results = $mysqli->query("SELECT * FROM products where price BETWEEN 0 AND $price_filter and status='active' ");
}elseif(isset($_GET['allfilter'])){
	
	if (isset($_GET['sendfilter'])) {
		$getbrand=$_POST['brand'];	
		$getfilter=$_POST['filter'];
  	 	$getgender=$_POST['gender'];
  	 	$filter1=$_POST['brand'];	
		$filter2=$_POST['filter'];
  	 	$filter3=$_POST['gender'];
    
    
	}
	else{
			$getbrand=$_POST['brand'];	
			$getfilter=$_POST['filter'];
  	 		$getgender=$_POST['gender'];
  	 		 $filter1 = "'" . implode ( "', '", $getbrand ) . "'";
			 $filter2 = "'" . implode ( "', '", $getfilter ) . "'";
			 $filter3 = "'" . implode ( "', '", $getgender ) . "'";
}



 if (!empty($getbrand)) {
 	  $filter_q1="brand IN($filter1) And";
 }
 if (!empty($getfilter)) {
 	  $filter_q2="sub IN($filter2) And";
 }
 if (!empty($getgender)) {
 	  $filter_q3="gender IN($filter3) And";
 }

"SELECT * FROM products where $filter_q1 $filter_q2 $filter_q3 status='active' order by serial_no +0 asc"; 

$results =$mysqli->query("SELECT * FROM products where $filter_q1 $filter_q2 $filter_q3 status='active' order by serial_no +0 asc");



}
else  {
$results = $mysqli->query("SELECT * FROM products where status='active'order by id desc ");
}
if($results){ 
	 $products_item = '';

//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{      
	 if($obj->quantity >= 1)
	{
        $quantity="<span><strong style='color:green !important;font-weight:900 !important'><small>In Stock</small></strong></span>";
        $add="<input type='submit'class='btn btn-default view-detail col-md-5'style='padding: 7px;'value='Add To Cart'></input>";
        $view="<a href='details.php?id={$obj-> id }' class='btn btn-default w-100 view-detail col-md-5' style='padding: 8px;'>View Details</a>";
	}
	else{
		$quantity="<span><strong style='color:red !important;font-weight:900 !important'><small>Out Of Stock</small></strong></span>";
		$view="<a href='details.php?id={$obj-> id }' class='btn btn-default w-100 view-detail col-md-5' style='padding: 8px;margin-left: 66px;'>View Details</a>";

	}
	if(!empty($obj->offer))
	{
		$off_price="<p class='prod-price text-primary btn-details' data-id='{$obj-> id}' data-toggle='modal' data-target='.bd-example-modal-xl' style='font-weight:900'>Offer Price : INR $obj->offer.00</p>";
	}
	else{
        $off_price='';
	}
	if (!empty($obj->offer)) {
		$price="<p class='prod-price text-primary btn-details' data-id='{$obj-> id}' data-toggle='modal' data-target='.bd-example-modal-xl' style='color:#8d8c8c !important;'> Price : INR <del>{$obj-> price }.00</del></p>";
	}
	else{
     $price="<p class='prod-price text-primary btn-details' data-id='{$obj-> id}' data-toggle='modal' data-target='.bd-example-modal-xl' > Price : INR {$obj-> price }.00</p> <p></p>";
	}
	$products_item .= <<<EOT
						<li class="mix rating pricefresh">
							<div class="thumbnail thumbnail-product">
							  <figure class="image-zoom" styles="width:267px; height:220px;">
							    <!--<img src="product/{$obj-> f_newfile }" alt="image" styles="width:267px; height:220px;"> -->

							    <a href="#" data-id="{$obj-> id}"  data-target=".bd-example-modal-xl" data-toggle="modal" class="btn-details"><img src="product/{$obj-> f_newfile }"  alt="image" styles="width:267px; height:220px;"></a>

							  </figure>
								<div class="caption">
									<div class="text-wrap">
										<h5><a href="#" style=" text-transform: capitalize;" data-toggle="modal" class="btn-details"  data-id="{$obj-> id}" data-target=".bd-example-modal-xl">{$obj->brand} {$obj->product_name}</a></h5>
										<!-- /rating-star -->
										$off_price
										$price
										
										<div class="filter-list-disp">
											<p class="dispatch-info" style='color:#a15454 !important'><i class="flaticon-shipping"></i> Dispatched Within 24 Hrs
											 </p>
											 $quantity
												<form action="cart_update.php" method="POST">

											<strong style="color:black;">Qty &nbsp;</strong><input type="number" min="1" size="2" style="width: 80%;" name="product_qty" placeholder="Quantity" value="1" /><br><br>

	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="getbrand" value="$filter1" />
	<input type="hidden" name="getgender" value="$filter3" />
	<input type="hidden" name="getfilter" value="$filter2" />
	<input type="hidden" name="return_url" value="{$current_url}" />

<script>
function myFunction() {
    alert("Your product is added on cart go to view your cart !");
}
</script>
												<div class="row" style="margin-bottom: -28px;">
												$view
												<!-- <a href="details.php?id={$obj-> id }" class="btn btn-default w-100 view-detail col-md-5" style="padding: 8px;">View Details</a> -->
												<a href="" class="col-md-1 w-100" style="padding: 0px;"></a>

												$add

												<!-- <input type="submit" class="btn btn-default view-detail col-md-5" style="padding: 7px;" value="Add To Cart"></input> -->
												</div>
										</div>
										</form>

									</div><!-- /text-wrap -->
									<!-- <div class="list-wrap">
										<h5>Highlights:</h5>
										<ul class="list-6">
											<li>100% Genuine Product</li>
											<li>Brand: Guess</li>
											<li>Size: 30 ml - 200 ml</li>
											<li>Gender: Women</li>
											<li>Type: EDT</li>
											<li>Fragrance Notes: Orchid</li>
										</ul>
										<a href="product-single.php" class="btn btn-default view-detail">View Details</a>
																		

									</div> --><!-- /list-wrap -->
								</div>
							</div><!-- /thumbail -->
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?> 

						





						
					</ul>

					<?php
					if (isset($_GET['search'])) {
					$getsearch=htmlspecialchars($_GET['search']);	
					$sql_no="SELECT * FROM products where product_name like '%$getsearch%' and status='active'";
					$result_no=mysqli_query($con,$sql_no);
					$row_no=mysqli_fetch_array($result_no,MYSQLI_ASSOC);
					$count_no=mysqli_num_rows($result_no);

					if ($count_no=='0') {
					  echo "<center><img src='http://aqeeqtrading.com/img/noproduct.jpg'></center>";
					}
					}
					?>

					<!-- filter-list -->
					
					<!-- <div class="pagination-right">
						<ul class="pagination pagination-lg">
							<li class="prev disabled"><a href="#"><i class="flaticon-arrowhead7"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li><li class="prev"><a href="#"><i class="flaticon-arrow487"></i></a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next"><a href="#"><i class="flaticon-arrow487"></i></a></li>
						</ul>
					</div> --><!-- /pagination-right -->

				</div>
			</div>
		</div>
	</section>




    <!---footer--->
	<?php include 'include/footer.php'; ?>
	<!---footer--->

	</div><!-- /pageWrap -->



	<!-- modal box here -->

	<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="width: 1075px;
    height: 500px;
    right: 259px;">
    <a href="#" class="float-right cl" data-dismiss="modal" style="float: right;
    margin-right: 10px;
    font-size: 25px;
    border-radius: 50%;">&times;</a>
      	
      	<div id="getdesc"></div>

    </div>
  </div>
</div>












<!-- JavaScript
================================================== -->

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php include 'include/js.php'; ?>
<!-----categories Page Js-------->
 <script>
      $(document).ready(function(){
        $('.fade').click(function(){
   		    location.reload(true);
        })
      });
    </script>
     <script>
      $(document).ready(function(){
        $('.cl').click(function(){
   		    location.reload(true);
        })
      });
    </script>
<!------------->
  <script>
      $(document).ready(function(){
        $('.btn-details').click(function(){
   		 var tex = $(this).data('id');
          $.post("modal.php",{
            tex:tex}
                 ,function(data){
            $("#getdesc").html(data);
          });     
        })
      });
    </script>
<script>
	 $(document).ready(function(){
	$('#checkall').click(function () {   
	

   if(this.checked){
            $('.brand').each(function(){
                $(".brand").prop('checked', true);
            })
        }else{
            $('.brand').each(function(){
                $(".brand").prop('checked', false);
            })
        }
   
 });
	});
</script>

<script>
$(document).ready(function(){
  $(".sho").click(function(){
    $("#hidd").toggle();
  });
});
</script>
</body>
</html>
