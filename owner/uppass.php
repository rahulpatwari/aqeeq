<?php require_once('autho/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <div class="row">
   <div class="col-md-6">
     <img src="https://image.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg" style="width: 100%; height: auto; margin-top: 50px;">
   </div>
   <div class="col-md-6">
     
     <div>
       <h1 style="margin-top:120px;"><strong>Update Your Account Password</strong></h1>

            <form action="controller/adminreset-password.php" method="POST">
                <div class="form-group" style="margin-top: 80px;">
                  <input class="form-control" type="password" name="password" placeholder="Enter New Password Here" required="">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-primary" name="reset">Update Password</button>
                </div>
                <a href="index.php" style="float: right;">Skip <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </form>


     </div>


   </div>
 </div>    
</div>

</body>
</html>
