<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:54:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Aqeeq</title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="img/logo.png" alt="logo">
            <h1><span class="font-weight-light">Aqeeq</span></h1>
            <div class="laoderhorizontal"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <div class="row no-gutters vh-100 proh bg-template">
        <img src="img/apple.png" alt="logo" class="apple right-image align-self-center">
    
        <div class="col align-self-center px-3 text-center">
            <img src="img/logo.png" alt="logo" class="logo-small">
            <h2 class="text-white "><span class="font-weight-light">Sign</span>In</h2>
            <form class="form-signin shadow" method="POST" action="../controller/user-autho.php">
                <div class="form-group float-label">
                    <input type="text" name="email" id="inputEmail" class="form-control" required autofocus>
                    <label for="inputEmail" class="form-control-label">Email Address Or Mobile Number*</label>
                </div>

                <div class="form-group float-label">
                    <input type="password" id="inputPassword" name="password" maxlength="10" class="form-control" required>
                    <label for="inputPassword" class="form-control-label">Password</label>
                </div>

                <div class="form-group my-4 text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme">Remember Me</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto">
                        <input type="hidden" value="app" name="app">
                        <input type="submit" class="btn btn-lg btn-default btn-rounded shadow"value="Sign in">
                    </div>
                    <div class="col align-self-center text-right pl-0">
                        <a href="forgot-password.php">Forgot Password?</a>
                    </div>
                </div>
            </form>
            <p class="text-center text-white">
                Don't have account yet?<br>
                <a href="signup.php">Sign Up</a> here.
            </p>
        </div>

    </div>

    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:54:41 GMT -->
</html>
