<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">
  <meta name="theme-color" content="#491414" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta name="author" content="">

  <title>Aqeeq</title>

  

      <!---include CSS---->

 

  <?php include 'include/css.php'; ?>

  

  <style>
  @media only screen and (max-width: 600px) {
  .in{
     margin-bottom: 70px !important;
  }
  .im{
    margin-bottom: 0px !important;
    width: 74px;
    position: absolute;
    left: 131px;
    bottom: 100px;
  }
}

      .thumbnail-product {

 border:2px solid #ffffff2b;
    box-shadow: none;
    border-radius: 57px;

}
.dere:hover{
  color: white;
}

.mb-20 {
    margin-bottom: 20px;
}

figure.image-zoom {
    height: 225px;
    max-height: 225px;
}

.pos-re{
  position: relative;
}

.set-1 {
    position: absolute;
    left: -40px;
    top: 305px;
}

.set-2 {
    position: absolute;
    right: -40px;
    top: 305px;
}
  </style>



</head>



<body>



   <div class="pageWrap">

    <!---include header---->



   <?php include 'include/header.php'; ?>



 

 <!-- <div class="tp-banner-container pattern-1" style="height: auto"> -->

   

     <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->

    <ol class="carousel-indicators">
  <?php

              require_once('owner/autho/data-autho.php');

              $sno=0;

              $sqlssh = mysqli_query($con,"Select * from `slider` order by id desc"); 

              while($datassh = mysqli_fetch_array($sqlssh)){ ?>
      <li data-target="#myCarousel" data-slide-to="<?echo $sno;?>" class="active"></li>
    <?php $sno++; }?>
    </ol>



    <!-- Wrapper for slides -->

    <div class="carousel-inner">

              <?php

              require_once('owner/autho/data-autho.php');

              $sno=1;

              $sqlssh = mysqli_query($con,"Select * from `slider` order by serial_no +0 asc"); 

              while($datassh = mysqli_fetch_array($sqlssh)){ ?>       

        <div class="item  <?php $get_value=$sno++; if($get_value=='1'){ echo 'active';}     ?>">

        <a href="<?php echo $datassh['link']; ?>"><img src="slider/<?php echo $datassh['f_newfile']; ?>" alt="" style="width:100%;"></a>

      </div>

    <?php } ?>

    <!--   <div class="item">

        <img src="images/slide-1.jpg" alt="" style="width:100%;">

      </div>



     <div class="item">

        <img src="images/slide-3.jpg" alt="" style="width:100%;">

      </div> -->

    </div>



    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">

      <span class="glyphicon glyphicon-chevron-left"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">

      <span class="glyphicon glyphicon-chevron-right"></span>

      <span class="sr-only">Next</span>

    </a>

  </div>



      <div class="tp-bannertimer"></div>


      <!-- </div> --><!-- /tp-banner-container -->



  <section class="section" style="padding-bottom:5px;">


      <!-- brand categories here -->


    <div class="container">

      <div class="row pos-re">







                      <h3 class="" style="padding-left: 20px;text-align: center;">Top Selected Brands</h3>
                      <img class="img-responsive set-under" style="margin: -19px 0px;padding-left: 20px;margin:0 auto;" src="img/underlinee.png"><br>
                        <span class="caro-prev caro-featured-prev set-1"><i class="flaticon-arrowhead7"></i></span>

                      <span class="caro-next caro-featured-next set-2"><i class="flaticon-arrow487"></i></span>
    
          <div class="carousel-multiple owl-carousel " style="margin-left:0px;margin-right:0px; padding-bottom:30px;">



                
          <?php

              require_once('owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `brand` order by serial_no +0 asc"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?> 
<a href="http://aqeeqtrading.com/products.php?get_brand=<?php echo $datas_cat1['brand_name'];?>">
            <div class="item" style="background: #491414;padding-top: 20px;color: white;border: 5px solid white;">


              <div class="thumbnail thumbnail-product">



                <figure class="image-zoom">



                  <img alt="image" src="product/<?php echo $datas_cat1['f_newfile']; ?>" height="267" width="265">



                </figure>



                <div class="caption text-center">



                  <h5 style="font-size: 22px;"><a href="http://aqeeqtrading.com/products.php?get_brand=<?php echo $datas_cat1['brand_name'];?>" class="dere"><?php   $title_message=htmlspecialchars($datas_cat1['brand_name']);  
                       $positiont=40; // Define how many character you want to display.
                     $title_message=$datas_cat1['brand_name'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);

                  echo ucwords($head); ?></a></h5>


                  <div class="rating-star" style="display: none;">



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7"></i>



                    <i class="flaticon-favourites7"></i>



                  </div><!-- /rating-star -->



                  <!--<p class="prod-price text-primary">from Rs 300.00</p>-->



                </div>



              </div><!-- /thumbail -->



            </div>
          </a>
        <?php } ?>


        

      







          </div>



        </div><!-- /other-products -->



        

      </div>


















   <!-- first categories -->  

    <div class="container">

      <div class="row">







                      <!-- <h3 class="" style="padding-left: 20px;">Fastest Selling </h3> -->
    				      		<h3 class="" style="padding-left: 20px;text-align: center;">New Arrival</h3>
                      <img class="img-responsive set-under" style="margin: -19px 0px;padding-left: 20px;margin:0 auto;" src="img/underlinee.png"><br>
    


		      	    
        	 <?php

              require_once('owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'New Arrival' and status='active' order by id desc limit 8"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>	

		      
            <a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>">    
             <div class="col-md-3 mb-20">
       <div class="prod-box">
      

 

		          <div class="thumbnail thumbnail-product">



		            <figure class="image-zoom">



		              <img alt="image" src="product/<?php echo $datas_cat1['f_newfile']; ?>" height="267" width="265">



		            </figure>



		            <div class="caption text-center">



		              <h5 style="font-size: 18px; margin: 1px;"><a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($title_message);

                   ?></a></h5>
                <h5> 
                  <?php if(!empty($datas_cat1['offer'])){?>
                   <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Offer Price : INR <?php echo $datas_cat1['offer'].".00"; ?></big></strong>
                  <?php }else{ }?>
                 <?php if(!empty($datas_cat1['offer'])){?>
                  <p style="margin-top: 5px;"> Price : INR <del><?php echo $datas_cat1['price'].".00"; ?></del></p></h5>
               <?php }else{ ?>
                  <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Price : INR <?php echo $datas_cat1['price'].".00"; ?></h5></big></strong>
               <?php } ?>


		              <div class="rating-star" style="display: none;">



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7"></i>



		                <i class="flaticon-favourites7"></i>



		              </div><!-- /rating-star -->



		              <!--<p class="prod-price text-primary">from Rs 300.00</p>-->



		            </div>



		          </div><!-- /thumbail -->



		        </div>

          </div>
        </a>

		    <?php } ?>

		    

		      		    

		       



		    

		       

		        

		     

		    

		  









				</div><!-- /other-products -->



        

      </div>

 <!--  <div class="section-focus bg-dark hidden-xs">

    <div class="container">

      <div class="promo-box">

        <div class="row">
<?php

              require_once('owner/autho/data-autho.php');

              $sqls = mysqli_query($con,"Select * from `offer_notice`"); 

              while($datas = mysqli_fetch_array($sqls)){ ?>

      <div class="col-sm-9">

        <p><strong><?php echo ucwords(htmlspecialchars($datas['title'])); ?></strong></p>

          </div>

          <div class="col-sm-3">

        <a href="<?php echo htmlspecialchars($datas['url']); ?>" class="btn btn-default btn-lg">Start Shopping</a>
  </div>

      </div>

    <?php } ?>
         
        

  

      </div>

    </div>

  </div> -->
<br>
<!-- 
  <div class="section-focus bg-dark hidden-xs">

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

  </div>

 -->
      <!-- second categories here -->


    <div class="container">

      <div class="row">







                      <!-- <h3 class="" style="padding-left: 20px;">Customers Choice</h3> -->
    				      		<h3 class="" style="padding-left: 20px;text-align: center;">Hot Selling</h3>
                      <img class="img-responsive set-under" style="margin: -19px 0px; padding-left: 20px;margin:0 auto;" src="img/underlinee.png"><br>
    
        	<?php

              require_once('owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'Hot Selling' and status='active' order by id desc limit 8"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>	

                <a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>">  
		         <div class="col-md-3 mb-20">
       <div class="prod-box">
      

 
		          <div class="thumbnail thumbnail-product">
 
      

		            <figure class="image-zoom">



		              <img alt="image" src="product/<?php echo $datas_cat1['f_newfile']; ?>" height="267" width="265">



		            </figure>



		            <div class="caption text-center">



                  <h5 style="font-size: 18px; margin: 1px;"><a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>"><?php  
 
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=20; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);
                    $brandget=$datas_cat1['brand'];



                  echo "$brandget "; echo ucwords($title_message); ?></a></h5>

                 <h5>   <?php if(!empty($datas_cat1['offer'])){?>
                   <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Offer Price : INR <?php echo $datas_cat1['offer'].".00"; ?></big></strong> 
                  <?php }else{ }?>
                 <?php if(!empty($datas_cat1['offer'])){?>
                  <p style="margin-top: 5px;"> Price : INR <del><?php echo $datas_cat1['price'].".00"; ?></del></p></h5>
               <?php }else{ ?>
                  <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Price : INR <?php echo $datas_cat1['price'].".00"; ?></h5></big></strong>
               <?php } ?>
                  </h5>

		              <div class="rating-star" style="display: none;">



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7 selected"></i>



		                <i class="flaticon-favourites7"></i>



		                <i class="flaticon-favourites7"></i>



		              </div><!-- /rating-star -->



		              <!--<p class="prod-price text-primary">from Rs 300.00</p>-->



		            </div>



		          </div><!-- /thumbail -->



		        </div>
</div></a>
		    <?php } ?>
</div>
</div>
      
<!--  <div class="container">

      <div class="row">

      <?php
       for ($x=0; $x < 12; $x++) { ?> 
        
      
      <div class="col-md-3 mb-20">
       <div class="prod-box">
        <figure class="image-zoom text-center">
           <img alt="image" src="product/5e29a54a8e9b8.jpg" height="267" width="265" style="padding:5px">
        </figure>

        <div class="caption text-center">



                  <h5 style="font-size: 22px;"><a href="http://aqeeqtrading.com/details.php?id=33">Gucci </a></h5>

                  <h5><strong>Price : 500</strong></h5>


                  <div class="rating-star" style="display: none;">
                    <i class="flaticon-favourites7 selected"></i>
                    <i class="flaticon-favourites7 selected"></i>
                    <i class="flaticon-favourites7 selected"></i>
                    <i class="flaticon-favourites7"></i>
                    <i class="flaticon-favourites7"></i>
                  </div>
                </div>

       </div> 
      </div>

       <?php }
        ?>
   

    </div>

  </div>
 -->
     <br><br><br>


      <!-- third categories here -->


    <div class="container">

      <div class="row">







    				      		<h3 class="" style="padding-left: 20px;text-align: center;">Customers Choice</h3>
                      <img class="img-responsive set-under" style="margin: -19px 0px;padding-left: 20px;margin:0 auto;" src="img/underlinee.png"><br>
    


                
           <?php

              require_once('owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'Customers Choice' and status='active' order by id desc limit 8"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?> 

          
            <a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>">    
             <div class="col-md-3 mb-20">
       <div class="prod-box">
      

 

              <div class="thumbnail thumbnail-product">



                <figure class="image-zoom">



                  <img alt="image" src="product/<?php echo $datas_cat1['f_newfile']; ?>" height="267" width="265">



                </figure>



                <div class="caption text-center">



                  <h5 style="font-size: 18px;margin: 1px;"><a href="http://aqeeqtrading.com/details.php?id=<?php echo $datas_cat1['id']; ?>"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($title_message);

                   ?></a></h5>
                <h5> 
                  <?php if(!empty($datas_cat1['offer'])){?>
                   <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Offer Price : INR <?php echo $datas_cat1['offer'].".00"; ?></big></strong>
                  <?php }else{ }?>
                 <?php if(!empty($datas_cat1['offer'])){?>
                  <p style="margin-top: 5px;"> Price : INR <del><?php echo $datas_cat1['price'].".00"; ?></del></p></h5>
               <?php }else{ ?>
                  <strong style="color:#cc6b18 !important;font-weight:900 !important"><big>Price : INR <?php echo $datas_cat1['price'].".00"; ?></h5></big></strong>
               <?php } ?>


                  <div class="rating-star" style="display: none;">



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7 selected"></i>



                    <i class="flaticon-favourites7"></i>



                    <i class="flaticon-favourites7"></i>



                  </div><!-- /rating-star -->



                  <!--<p class="prod-price text-primary">from Rs 300.00</p>-->



                </div>



              </div><!-- /thumbail -->



            </div>

          </div>
        </a>

        <?php } ?>

        

                  

           



        

           

            

         

        

      









    

		      		    

		       



		    

		       

		        

		     

		    

		  







		      </div>



				</div><!-- /other-products -->



        

      </div>







       <!----Video---->



 <!--      <div class="container">

      <div class="row">

       <div class="col-sm-6">

           <div class="embed-responsive embed-responsive-16by9">

          <video controls="" autoplay="" name="media"><source src="https://myperfumes.ae/wp-content/uploads/2019/05/video-1.mp4" type="video/mp4"></video>

          </div>

       	</div>

       <div class="col-sm-6">

       	<br><br>

        <h1>Aqeeq Trading</h1>

The world of niche fragrances has exploded in modern years and some traditionally niche companies are becoming very well-known and out of which <strong>My Perfume Select</strong> is one of the company where you can find multiple brands which include French and Oriental Fragrance but not limited to fragrances. We are proud to offer our niche Fragrances as a Franchise in the name of <strong>My Perfume Select</strong>.

       	</div>



      </div>

      </div>

       <br><br> -->

      <!----Video---->



  <div class="container">

<!--   <div class="row">



      <div class="features-list-box">

        <ul class="feautes-list">

          <li><a href="#">Lowest Prices</a></li>

          <li><a href="#">Vouchers for you</a></li>

          <li><a href="#">Original brands</a></li>

          <li><a href="#">products from our own stocks</a></li>

          <li><a href="#">Express shipping</a></li>

        </ul>

      </div>



    

       

        <?php



include_once("config.php");





//current URL of the Page. cart_update.php redirects back to this URL

 $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

            <?php

include"config.php";

if (isset($_GET['sub'])) {

  $sub=$_GET['sub'];

$results = $mysqli->query("SELECT * FROM products where sub='$sub' order by id desc ");

}elseif(isset($_GET['search'])){

    $search=$_GET['search'];

  $results = $mysqli->query("SELECT * FROM products where product_name like '%$search%' order by id desc");



}else  {

$results = $mysqli->query("SELECT * FROM products where cat = 'Home' order by id desc ");

}

if($results){ 

  $products_item = '';



//fetch results set as object and output HTML

while($obj = $results->fetch_object())

{

  $products_item .= <<<EOT



        <div class="col-sm-6 col-md-3">

          <div class="thumbnail thumbnail-product">

            <figure class="image-zoom">

             <a href="details.php?id={$obj-> id }"> <img src="product/{$obj-> f_newfile }" alt="image" style="height: 300px;

    width: 250px;"></a>

            </figure>

            <div class="caption text-center">

              <h5 style="  text-transform: capitalize;

"><a href="details.php?id={$obj-> id }">{$obj-> product_name }</a></h5>

              

              <p class="prod-price text-primary">From Rs {$obj-> price }.00</p>

            </div>

          </div>

        </div>  

    </EOT>



EOT;

}

$products_item .= '</ul>';

echo $products_item;

}

?> 

 -->









   





      <div class="row">

       <!--  <div class="col-sm-4">

          <div class="text-center">

            <div class="ad-box">

              <div class="ad-box-text">

                <p class="text-left"></p>

                <h4>Attar</h4>

                <p class="text-right"></p>

                <span class="tick"><i class="flaticon-arrowhead7"></i></span>

              </div>

              <figure><img src="images/resource/img-3.png" alt="image"></figure>

              <a href="products.php?sub=Attar"></a>

            </div>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="text-center">

            <div class="ad-box">

              <div class="ad-box-text">

             <h4>Perfume</h4>

              <span class="tick"><i class="flaticon-arrowhead7"></i></span>

              </div>

              <figure><img src="images/resource/img-4.png" alt="image"></figure>

              <a href="products.php?sub=Perfume"></a>

            </div>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="text-center">

            <div class="ad-box">

              <div class="ad-box-text">

                <h4>Bakhoor</h4>

           <span class="tick"><i class="flaticon-arrowhead7"></i></span>

              </div>

              <figure><img src="images/per2.png" alt="image"></figure>

              <a href="products.php?sub=Bakhoor"></a>

            </div>

          </div>

        </div> -->





        




				</div><!-- /other-products -->



   



     

		<!-- 	  <?php

              require_once('owner/autho/data-autho.php');

              $sqls = mysqli_query($con,"Select * from `offer_notice`"); 

              while($datas = mysqli_fetch_array($sqls)){ ?>

			<div class="tips-bar bg-primary">

				<p><strong><?php echo ucwords(htmlspecialchars($datas['title'])); ?></strong></p>

				<a href="<?php echo htmlspecialchars($datas['url']); ?>" class="read-more">read more</a>

			</div>

    <?php } ?>
 -->




<div class="container">

      <!-- /tips-bar -->



			<header class="heading">

				<span class="caro-prev caro-featured-prev"><i class="flaticon-arrowhead7"></i></span>

				<span class="caro-next caro-featured-next"><i class="flaticon-arrow487"></i></span>

				<h4>Featured Perfume</h4>

			</header>



			<div class="carousel-single owl-carousel" data-trans="backSlide" data-btn-next="caro-featured-next" data-btn-prev="caro-featured-prev"  style="height:400px">

				 <?php

              require_once('owner/autho/data-autho.php');

              $sqlss = mysqli_query($con,"Select * from `featured_slider`  order by id desc "); 

              while($datass = mysqli_fetch_array($sqlss)){ ?>

        <div class="item">

					<div class="featured-box">

						<div class="row">

							<div class="col-sm-5">

								<figure class="image">

									<img src="premslider/<?php echo htmlspecialchars($datass['image']); ?>" alt="image" style="height:340px">

									

								</figure>

							</div>

							<div class="col-sm-7">

								<div class="text">

									<p><a href="premslider/<?php echo htmlspecialchars($datass['image']); ?>" class="text-primary"></a></p>

									<h4><?php echo htmlspecialchars($datass['title']); ?></h4>

									<div id="info-1" class="collapse in">

                  

  									<br><br><a href="<?php echo htmlspecialchars($datass['url']); ?>" class="btn btn-default">View More</a>

								  </div>

                </div>

							</div>

						</div>

					</div><!-- /featured-box -->

				</div>

			<?php } ?>

			</div>

    </div><!-- /container -->

  </section><!-- /section -->





	<!-- <section class="section-sales section-image" style="background-image:url(images/resource/bgImg-1.jpg);background-size: contain;">

		<div class="container">

			<div class="row">

				<div class="col-sm-9 col-sm-push-3 col-md-6 col-md-push-6 col-lg-5 col-lg-push-7 ">

					<div class="promotion-box">

						<div class="text">

							<h4>Bath and Body</h4>

							<h3>Sale</h3>

							<h4>Save upto <strong>70%</strong></h4>

						</div>

						<a href="http://infintyclub.co.in/aqeeq/Aqeeq-Trading.apk" class="btn btn-default text-uppercase">Download App</a>

					</div> /promotion-box -->

				<!-- </div>

			</div>

		</div>

	</section> --> 



	





	<?php include 'include/footer.php'; ?>

	

</div><!-- /pageWrap -->





<!----POP UP newsletter-->

<!-- 

<div class="newsletter-holder">

  <div class="offer-tip">

    <div class="offer-tip-inner">

      <span>Up To</span>

      <h1>60%</h1>

      <span>off</span>

    </div>

  </div>

	<div class="newsletter-head text-right">

		<h4>Premium Fragrances</h4>

		<h3>Discount Prices</h3>

	</div>

	<div class="newsletter-content">

		<h4 class="text-uppercase">All you need you can find it here</h4>

		<div class="row">

			<div class="col-sm-7">

				<div class="image">

					<img src="https://www.rd.com/wp-content/uploads/2017/08/The-REAL-Difference-Between-Cheap-and-Expensive-Perfumes-shutterstock_596138639-ft.jpg" alt="image">

				</div>

			</div>

			<div class="col-sm-5">

				<ul class="list-nl">

					<li><i class="flaticon-shipping"></i>Deliveries in 3-4 days</li>

					<li><i class="flaticon-32"></i>Free beautician advice</li>

					<li><i class="flaticon-parfum1"></i>9000+ Products</li>

					<li><i class="flaticon-wallet33"></i>170+ Brands</li>

				</ul>

			</div>

		</div>

	</div>

	<div class="newsletter-bottom">
     <img src="http://aqeeqtrading.com/images/logo-aqeeq.png" class="im" style="
    margin-bottom: -100px;
">
		<p class="text-center">Available on play store <img src="https://i.dlpng.com/static/png/6976819_preview.png" width="16px" height="16px"></p>

     <div class="newsletter-bottom text-center">
     <a href="coming.php" class="btn btn-primary" style="position: relative;">
		<i class="fa fa-android"></i> &nbsp;&nbsp;&nbsp;Downlod App Now !
  </a>
</div>

  

	</div>

</div> --><!-- /newsletter-holder -->


<!-- 
<div class="newsletter-cover"></div> -->

<!----POP UP newsletter-->





<!-- JavaScript

================================================== -->



<?php include 'include/js.php'; ?>



</body>



</html>

