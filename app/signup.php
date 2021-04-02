<?php include('include/header.php');?>

    <div class="row no-gutters vh-100 proh bg-template">
        <img src="img/apple.png" alt="logo" class="apple right-image align-self-center">
        <div class="col align-self-center px-3  text-center">
            <img src="img/logo.png" alt="logo" class="logo-small">
            <h2 class="text-white"><span class="font-weight-light">Sign</span>In</h2>
            <form class="form-signin shadow" method="POST" action="../controller/add-user.php">
                 <div class="form-group float-label active">
                    <input type="text" class="form-control" name="name" required>
                    <label class="form-control-label">Name</label>
                </div>
                
                <div class="form-group float-label active">
                    <input type="email" id="inputEmail" name="email" class="form-control" required autofocus>
                    <label for="inputEmail" class="form-control-label">Email address</label>
                </div>
                <div class="form-group float-label active">
                    <input type="mobile" id="mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"name="mobile" required autofocus>
                    <label for="mobile" class="form-control-label">Mobile</label>
                </div>
                <div class="form-group float-label">
                    <input type="password" id="inputPassword" name="password" class="form-control" required>
                    <label for="inputPassword" class="form-control-label">Password</label>
                </div>

                <div class="form-group my-4 text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme">I accept <a href="#">Terms and Condition</a></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto">
                         <input type="hidden" value="app" name="app">
                       <input type="submit" name="register" class="btn btn-lg btn-default btn-rounded shadow" value="Sign Up">
                    </div>
                </div>
            </form>
            <p class="text-center text-white">
                Already have account?<br>
                <a href="login.php">Sign In</a> here.
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


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:55:05 GMT -->
</html>
