   <?php
  require_once('../config.php');
  require_once('../controller/session.php');
?>
<!doctype html>
<html lang="en" class="pink-theme">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#E3EAF1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Aqeeq</title>

    <link href="https://www.aqeeqtrading.com/images/logo.png" type="img/x-icon" rel="shortcut icon">
    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="http://aqeeqtrading.com/app/vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://aqeeqtrading.com/app/vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="http://aqeeqtrading.com/app/vendor/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="http://aqeeqtrading.com/app/vendor/chosen_v1.8.7/chosen.min.css" rel="stylesheet">

    <!-- nouislider CSS -->
    <link href="http://aqeeqtrading.com/app/vendor/nouislider/nouislider.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="http://aqeeqtrading.com/app/css/style.css" rel="stylesheet">
    
</head>

<body>
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="img/logo.png" alt="logo">
            <h1><span class="font-weight-light">Aqeeq</span></h1>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="text-center">
            <div class="figure-menu shadow">
                <figure><img src="http://aqeeqtrading.com/app/img/user1.png" alt=""></figure>
            </div>
                <?php  
              
        if (empty($_SESSION['login_user'])) {

          $name="User";

        }

        else{

    $user_check=$_SESSION['login_user'];

          include '../owner/autho/data-autho.php';        

         $sql="Select * from user where email ='$user_check'";
  $userdatas = mysqli_query($con,$sql);
            while($udatas = mysqli_fetch_array($userdatas)){

            $name=htmlspecialchars($udatas['name']);
            $mobile=htmlspecialchars($udatas['mobile']);
     $city=htmlspecialchars($udatas['city']);
     $state=htmlspecialchars($udatas['state']);
     $address=htmlspecialchars($udatas['address']);
     $zip=htmlspecialchars($udatas['zip']);
  
      $wallet=htmlspecialchars($udatas['wallet']);

        }

        }



        ?>
            <h5 class="mb-1 "><?php echo $name; ?></h5>
            <p class="text-mute small"><?php echo $city;?>, <?php echo $state;?></p>
        </div>
        <br>
        <div class="row mx-0">
            <div class="col">
                <div class="card mb-3 border-0 shadow-sm bg-template-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="text-secondary small mb-0">Balance Available</p>
                                <h6 class="text-dark my-0"><?php echo $wallet;?></h6>
                            </div>
                            <!-- <div class="col-auto">
                                <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">add</i></button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <h5 class="subtitle text-uppercase"><span>Menu</span></h5>
                <div class="list-group main-menu">
                    <a href="index.php" class="list-group-item list-group-item-action active">Store</a>
                   <!--  <a href="notification.html" class="list-group-item list-group-item-action">Notification <span class="badge badge-dark text-white">2</span></a> -->
                    <a href="all-products.html" class="list-group-item list-group-item-action">All Products</a>
                  <?php if ($_SESSION['login_user']) {
               ?>
         <a href="controller/logout.php" class="list-group-item list-group-item-action">Logout</a>
     <?php
        }
        else{
             ?>
         <a href="login.php" class="list-group-item list-group-item-action mt-4">Login</a>
     <?php
        }
        ?>
                    
                    <a href="my-order.php" class="list-group-item list-group-item-action">My Order</a>
                    <a href="profile.php" class="list-group-item list-group-item-action">My Profile</a>
                   <!--  <a href="controls.html" class="list-group-item list-group-item-action">Pages Controls <span class="badge badge-light ml-2">Check</span></a> -->
                   <!--  <a href="setting.html" class="list-group-item list-group-item-action">Settings</a> -->
                    
                </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><img src="http://aqeeqtrading.com/app/img/menu.png" alt=""><span class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="http://aqeeqtrading.com/app/img/logo-header.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="img/user1.png" alt=""></figure>
                </div>
                <h3 class="mb-1 "><?php echo $name; ?></h3>
                <p class="text-secondary"><?php echo $city;?>, <?php echo $state;?></p>
            </div>
            <br>
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <span class="btn btn-default p-3 btn-rounded-15">
                                <i class="material-icons">account_balance_wallet</i>
                            </span>
                        </div>
                        <div class="col pl-0">
                            <p class="text-secondary mb-1">Balance Available</p>
                            <h4 class="text-dark my-0"><?php echo $wallet;?></h4>
                        </div>
                       <!--  <div class="col-auto pl-0 align-self-center">
                            <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">add</i></button>
                        </div> -->
                    </div>
                </div>
            </div>

<!-- 
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                        <div class="row">
                            <div class="col-auto align-self-center pr-1">
                                <span class="btn btn-success button-rounded-26">
                                    <i class="material-icons md-18 text-mute">card_giftcard</i>
                                </span>
                            </div>
                            <div class="col pl-2">
                                <p class="text-secondary mb-0 small text-truncate">Today's Delivery</p>
                                <h6 class="text-dark my-0">4</h6>
                            </div>
                        </div>
                    </a>
                    <a class="nav-item nav-link text-left" id="nav-booking-tab" data-toggle="tab" href="#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false">
                        <div class="row">
                            <div class="col-auto align-self-center pr-1">
                                <span class="btn btn-warning button-rounded-26">
                                    <i class="material-icons md-18 text-mute">payment</i>
                                </span>
                            </div>
                            <div class="col pl-2">
                                <p class="text-secondary mb-0 small text-truncate">Future Bookings</p>
                                <h6 class="text-dark my-0">25</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                    <ul class="list-items">
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                    <ul class="list-items">
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">Orange 1kg at $ 152.00</div>
                                <div class="col-auto"><a href="#">Track</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
 -->
            <!-- <h6 class="subtitle">Friends</h6>
            <div class="row mb-4">
                <div class="col-12">
                    <figure class="avatar avatar-50">
                        <img src="img/user2.png" alt="">
                    </figure>
                    <figure class="avatar avatar-50">
                        <img src="img/user3.png" alt="">
                    </figure>
                    <figure class="avatar avatar-50">
                        <img src="img/user4.png" alt="">
                    </figure>
                    <figure class="avatar avatar-50">
                        <img src="img/user1.png" alt="">
                    </figure>
                    <div class="avatar avatar-50">
                        <a class="d-block" href="#">
                            <h5 class="text-template mb-0">46</h5>
                            <p class="small d-block text-secondary">More</p>
                        </a>
                    </div>
                </div>
            </div> -->

            <h6 class="subtitle">Contact Information</h6>
            <dl class="row mb-4">
                <dt class="col-3 text-secondary font-weight-normal">Email</dt>
                <dd class="col-9"><?php echo $email ;?></dd>
                <dt class="col-3 text-secondary font-weight-normal">Mobile</dt>
                <dd class="col-9"><?php echo $mobile;?></dd>
            </dl>

            <h6 class="subtitle">Address</h6>
            <p class="mb-4"><?php echo $address;?><br>
                <?php echo $city;?> - <?php echo $zip;?><br>
                <?php echo $state;?>
            </p>
            
            <a href="profile-edit.php" class="btn btn-lg btn-dark text-white btn-block btn-rounded shadow"><span>Edit Profile</span><i class="material-icons">arrow_forward</i></a>
            <br>
        </div>
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-link-default ">
                                <i class="material-icons">store_mall_directory</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.html" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="cart.html" class="btn btn-default shadow centerbutton">
                                <i class="material-icons">local_mall</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="favorite-products.html" class="btn btn-link-default">
                                <i class="material-icons">favorite</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="profile.php" class="btn btn-link-default active">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- nouislider js -->
    <script src="vendor/nouislider/nouislider.min.js"></script>

    <!-- chart js -->
    <script src="vendor/chartjs/Chart.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>

    <!-- chosen multiselect js -->
    <script src="vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {
        });

    </script>

</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:55:20 GMT -->
</html>
