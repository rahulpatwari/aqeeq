<?php
session_start();
$referal_id=$_SESSION['refaral_id'];
?>
<?php $page_name= basename($_SERVER['PHP_SELF']); 
?>
<style type="text/css">

     .btn-default{

            background:#491414 !important;;

            color:#fff !important;

            border-color: #491414 !important;



           }



          .btn-default:hover {

    background: #cc6b18 !important;

    color: #fff !important;

    border-color: #cc6b18 !important;

}



 i.fa.fa-align-left {

    font-size: 25px;

    border: none !important;

    color: #491414;

}

#Products li a {

    padding-left: 27px !important;

    color: #797979 !important;

}

.stickys {
  position: fixed;
  top: 0;
  width: 100%;
}

</style>



<?php

session_start();

include 'owner/autho/data-autho.php';

?><div class="tp-bar hidden-xs">

    <div class="container">

      <ul class="tp-links">

        <li><a href="my-account.php"><span style="color:#491414;font-weight:bold">Hello, <?php

        session_start();

        if (empty($_SESSION['login_user'])) {

          echo "User";

        }

        else{

          $getusersession=$_SESSION['login_user'];

          include 'owner/autho/data-autho.php';        

          $userdatas = mysqli_query($con,"Select * from user where email ='$getusersession'");

            while($udatas = mysqli_fetch_array($userdatas)){

          echo  $name=htmlspecialchars($udatas['name']);

        }

        }



        ?></span></a></li>

        <li>

          <span class="dropBox-btn" style="color:#491414;font-weight:bold">Account <i class="caret caret-cut"></i></span>

          <div class="dropBox">

            <div class="box-section text-center">

              <?php if (empty($_SESSION['login_user'])) {?>

              <h6 class=" text-center click btn btn-default text-uppercase">Sign In</h6>

              <?php } else { ?>

              <a href="controller/logout.php"><h6 class=" text-center click btn btn-default text-uppercase">Sign Out</h6></a>

              <?php } ?>  

              <h6 class=" text-center click1 btn btn-default text-uppercase" style="display: none;">X</h6>

              <br>

             

              <form action="controller/user-autho.php" method="POST" class="accounts-form clearfix togg" style="display: none; padding-top: 10px;">

                <div class="

                ">

                  <div class="form-group">

                    <input type="text" name="email" class="form-control" placeholder="Email Address Or Mobile Number" required>

                  </div>

                  <div class="form-group">

                    <input type="password" name="password" class="form-control" placeholder="Password" required>

                  </div>

                </div>

                <div class="form-group form-left">

                <input type="submit" class="btn btn-default text-uppercase" value="Sign In">

            </div>  

                <p class="help-block"><a href="#">Forgot your password?</a></p>

              </form><!-- /accounts-form -->



             

              



              

            </div><!-- /box-section -->

            <div class="box-section">

                            <?php if (empty($_SESSION['login_user'])) {?>



              <h6>New customer? <a href="register.php">Start here.</a></h6>

            <?php } ?>

           </div><!-- /box-section -->



           <div class="row">

            <div class="col-md-6">

              <div class="box-section">

                  <h6>

                 Your Order

                </h6>

              </div>  

               

                <ul class="inner-list">

        <li><a href="my-account.php">Your Account</a></li>

        <li><a href="order-history.php">Your Orders</a></li>        

                </ul>

       </div><!---col-md-6--->



        <div class="col-md-6 border-left-ss">

              <div class="box-section">

                  <h6>

                 Your Account

                </h6>

              </div>  

               

                <ul class="inner-list">

        <li><a href="edit-contact-data.php">Your Addresses</a></li>

        <li><a href="change-password.php">Account Password</a></li>

        

                </ul>

       </div><!---col-md-6--->

       

       </div><!---inner row-->  



          </div><!-- /dropBox -->

        </li>


      

        <li>

          <a href="coming.php" target="_blanck" style="color:#491414">
            <i class="fa fa-android" aria-hidden="true"></i>&nbsp;Download App

          

          </a>

                       

    

        </li>
  

      </ul><!-- /tp-links -->

    </div>

  </div><!-- /tp-bar -->





  <!------------------------->

  <!------------------------->



  

             <div class="main-bar" id="myHeader">



                 



    <div class="logo">
      <a href="index.php"><img src="images/logo-aqeeq.png" alt="perfume"></a>
    </div><!-- /logo -->





    <button type="button" id="sidebarCollapse" class="float-left">

                        <i class="fa fa-align-left"></i>

                    </button>

    <div class="user-controls-bar">



                   

      <ul class="user-controls">

           

        <li>

          <span class="site-search-btn dropBox-btn setnewpos hidden-xs"><i class="flaticon-magnifier56"></i></span>
          <div class="dropBox">

            <div class="box-section">

            

              <form class="accounts-form clearfix" action="products.php" method="GET">

                <div class="form-left">

                  <div class="form-group">

                    <input type="search" class="form-control" placeholder="Search Product" name="search" style="background-color: #e8f0fe;">

                  </div>

                </div>

                <input type="submit" class="btn btn-default text-uppercase" value="Search">

              </form><!-- /accounts-form -->

          

            </div><!-- /box-section -->
          </div>

          <span class="search-fild">
             <form class="accounts-form clearfix" action="products.php" method="GET">

                <div class="form-left">

                  <div class="form-group">

                    <input type="search" class="form-control setss" placeholder="Search Product" name="search" style="background-color: #e8f0fe;">

                  </div>

                </div>

                <input type="submit" class="btn btn-default text-uppercase sets" value="Search">

              </form><!-- /accounts-form -->

          </span>

          <!-- /dropBox -->



        </li>

      

        <li>

          <?php if($page_name=='forgetpass.php' || $page_name=='delaer-form.php'){ }else{?>

          <span class="cart-btn dropBox-btn set-respon"><i class="flaticon-shopping191"></i><span class="badge"><?php



include_once("config.php");

 $data=$_SESSION["cart_products"];?><?php 



echo $varcount = count($data);

?></span></span>

<?php } ?>

          <div class="dropBox">

            <div class="box-section">

              <ul class="cart-info-list">

                <?php



  if(isset($_SESSION["cart_products"])) //check session var



    {



    $total = 0; //set initial total value



    $b = 0; //var for zebra stripe table 



    foreach ($_SESSION["cart_products"] as $cart_itm)



        {



      //set variables to use in content below



      $product_name = $cart_itm["product_name"];



      $product_qty = $cart_itm["product_qty"];



      $product_price = $cart_itm["product_price"];



      $product_code = $cart_itm["product_code"];



      ?>

                <li class="cart-item">

                  <div class="cart-item-bx">

                    <?php

              require_once('owner/autho/data-autho.php');

              $sqlsi = mysqli_query($con,"Select * from `products` where product_code = '$product_code' "); 

              while($datasi = mysqli_fetch_array($sqlsi)){ 

                $getproduct_id=htmlspecialchars($datasi['id']);

                ?>

                    <figure><img src="product/<?php echo $datasi['f_newfile']; ?>" alt="image"></figure>

              <?php } ?>      

                    <div class="text">

                      <h6><a href="details.php?id=<?php echo $getproduct_id; ?>"><?php echo $product_name; ?></a></h6>

                      <p>Quantity <?php echo $product_qty; ?></p>

                      <p>Amount Per Product <?php echo $product_price; ?> Rs</p>

                      <p class="tot">Amount <?php echo $product_qty*$product_price; ?></p>

                    </div>

<!--                     <button type="button" class="close">&times;</button>

 -->                  </div><!-- /cart-item-bx -->

                </li>

      <?php } } else { ?>

       <center><img src="img/noproduct.jpg" style="width: 60%; height: auto;"></center>

      <?php } ?>          

               

              </ul><!--/ cart-info-list -->

              <?php if(empty($_SESSION["cart_products"])){ ?> 

                <a href="index.php" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>

              <?php }

              else{

              ?>

              <a href="cart.php" class="btn btn-dark btn-block dismiss-button">Go To Checkout</a>

            <?php } ?>

<!--               <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>

           </div> -->



            <!-- empty cart message -->

            <!-- <div class="box-section">

              <h6>Your Cart is empty</h6>

              <a href="#" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>

              <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>

            </div> 

          </div>

        </li>

        <li class="toggle-menu">

          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

        </li> -->

      </ul><!-- /user-controls -->

    </div><!-- /user-controls -->



    <div class="main-nav-bar">

     <!-- <nav class="navbar-collapse collapse">

        <ul class="main-nav">

          <li><a href="index.php">Home</a></li>

           <li><a href="aboutus.php">About Us</a></li>

          

            <?php

            require_once('owner/autho/data-autho.php'); 

            $cat_sql = mysqli_query($con,"Select * from cat where cat <> 'Home'");

            while($cat = mysqli_fetch_array($cat_sql)){ ?>

          <li>

            <a href="#"><?php echo $get_cat=htmlspecialchars($cat['cat']); ?></a>

            <ul>

                <?php

            require_once('owner/autho/data-autho.php'); 

            $sub_sql = mysqli_query($con,"Select * from sub where cat = '$get_cat'");

            while($sub = mysqli_fetch_array($sub_sql)){ ?>

                <li><a href="products.php?sub=<?php echo htmlspecialchars($sub['sub']); ?>"><?php echo htmlspecialchars($sub['sub']); ?></a></li>

            <?php } ?>

            </ul>

          </li>

          <?php } ?>

          

          <li><a href="contactus.php">Contact Us</a></li>

        </ul>

      </nav> -->

        <?php   $get_base = basename($_SERVER['PHP_SELF']);  

                if($get_base=='index.php' or $get_base=='cart.php' or$get_base=='details.php'  or $get_base=='products.php'){

                  

             ?>

              

          <div class="big-search float-right"> 

          <form class="accounts-form clearfix" action="products.php" method="GET">

                <div class="form-set">



                  <input type="search" class="form-control" placeholder="Search Product" name="search" style="background-color: #e8f0fe; ">

                  </div>

               

                <input type="submit" class="btn btn-default poss text-uppercase" value="Search">

              </form>

          </div>    

          <?php }?>



      <nav id="sidebar">

            <div id="dismiss">

               <i class="fa fa-arrow-left"></i>

            </div>



            <div class="sidebar-header">

              <a href="index.php"><img src="images/logo-aqeeq.png" alt="perfume"></a>

   

            </div>



            <ul class="list-unstyled components">

              

               <li class="active">

                    <a href="index.php">HOME</a>

                </li>



                <li>

                    <a href="aboutus.php">About Us</a>

                </li>

               



                <?php

              require_once('owner/autho/data-autho.php');

              $usercat = mysqli_query($con,"Select * from cat where cat <> 'Home'");

                  while($udatc = mysqli_fetch_array($usercat)){ ?>



                  <li class="">

                    <a href="#<?php echo $cat_name = $udatc['cat']; ?>" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $cat_name = $udatc['cat']; ?></a>

                    <ul class="collapse list-unstyled" id="<?php echo $cat_name = $udatc['cat']; ?>">

                       <?php

              require_once('owner/autho/data-autho.php');

              $usercats = mysqli_query($con,"Select * from sub where cat = '$cat_name'");

                  while($udatcs = mysqli_fetch_array($usercats)){ ?>

                        <li>

                            <a href="products.php?sub=<?php echo $udatcs['sub']; ?>" style="color:#491414 !important;">
                              <i class="fa fa-caret-right" aria-hidden="true" style="color: #491414;"></i> <?php echo $udatcs['sub']; ?></a>

                        </li>

              <?php } ?>         

                    </ul>

                </li>

                    <?php } ?> 


                     <li>

                    <a href="delaer-form.php">Become A Dealer</a>

                </li>

                     <li>

                    <a href="bulk.php">Bulk Deals</a>

                </li>


                     <li>

                    <a href="contactus.php">Contact Us</a>

                </li>

                <!--<li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Pages</a>

                    <ul class="list-unstyled collapse" id="pageSubmenu" style="">

                        <li>

                            <a href="#">Page 1</a>

                        </li>

                        <li>

                            <a href="#">Page 2</a>

                        </li>

                        <li>

                            <a href="#">Page 3</a>

                        </li>

                    </ul>

                </li>-->



            </ul>



          

        </nav>





    </div><!-- /main-nav-bar -->

     <div class="overlay"></div>

  </div><!-- /main-bar -->



