<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="theme-color" content="#e32a53" />
  <title>Aqeeq</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">Reset Account Password</h1>      
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="container">
            <?php if(isset($_GET['nc'])){?>
          <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Wrong !</strong> Your Password is wrong please confirm it
        </div>
         <?php } ?>
  <h3 class="text-center">Reset Password</h3><br>
  <form action="controller/passreset.php" method="POST">
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="email" placeholder="Enter Password" name="pass1">
    </div>
    <div class="form-group">
      <label for="pwd">Confirmation Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Confirmation Password" name="pass2">
    </div>
    <input type="hidden" name="rpid" value="<?php echo htmlspecialchars($_GET['rsid']); ?>">
    <button type="submit" name="uppass" class="btn btn-primary btn-block">Submit</button>
  </form>
</div>
    </div>
    <div class="col-md-4"></div>
  </div>     
</div>

</body>
</html>
