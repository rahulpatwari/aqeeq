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
                 session_start();

        if (empty($_SESSION['login_user'])) {

          $name="User";
          $wallet="0";
          $city="Your";
          $state="City";
         

        }

        else{

          $getusersession=$_SESSION['login_user'];

          include '../owner/autho/data-autho.php';        

          $userdatas = mysqli_query($con,"Select * from user where email ='$getusersession'");

            while($udatas = mysqli_fetch_array($userdatas)){

            $name=htmlspecialchars($udatas['name']);
            $state=htmlspecialchars($udatas['state']);
            $city=htmlspecialchars($udatas['city']);
     
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
                          <!--   <div class="col-auto">
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