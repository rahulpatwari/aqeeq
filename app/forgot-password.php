<?php include('include/header.php');?>
    <div class="row no-gutters vh-100 proh bg-warning">
        <img src="img/banana.png" alt="logo" class="banana right-image align-self-center">
        <div class="col align-self-center px-3  text-center">
            <img src="img/logo.png" alt="logo" class="logo-small">

            <h2 class="text-white"><span class="font-weight-light">Forgot</span>Password</h2>
            <?php if(isset($_GET['succ'])){?>
          <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Your Reset Link Send Your Registred Email Address
        </div>
         <?php } ?>

         <?php if(isset($_GET['wr'])){?>
          <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Wrong !</strong> This Email is Not Registred
        </div>
         <?php } ?>

            <form class="form-signin shadow" method="POST" action="../controller/forget.php">
                <p class="text-secondary small">Enter The Email Address Associated With Your Aqeeq Account.</p>
            
                <div class="form-group float-label active">
                    <input type="email" name="email" id="inputEmail" class="form-control"required autofocus>
                    <label for="inputEmail" class="form-control-label">Email address</label>
                </div>

                <div class="row">
                    <div class="col-auto">
                         <input type="hidden" value="app" name="app">
                        <input type="submit" name="reset" class="btn btn-lg btn-warning btn-rounded shadow" value="Reset">
                    </div>
                </div>
            </form>
            <p class="text-center text-white">
                Already have account password?<br>
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


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:55:05 GMT -->
</html>
