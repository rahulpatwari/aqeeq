<?php include 'include/header.php';?>



 <main class="app-content">

      <div class="app-title">

        <div>

          <h1><i class="fa fa-users"></i> Add Vendor</h1>

        </div>

       

      </div>

      <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

          <?php if(isset($_GET['succ'])){?>

          <div class="alert alert-info alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Success !</strong> Vendor Account Created Successfully .

</div>

<?php } ?>



  <?php if(isset($_GET['already'])){?>

          <div class="alert alert-info alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Error !</strong> Username Already Exist.

</div>

<?php } ?>

          <div class="tile">

            <div class="tile-body">

              <form action="controller/add-vendor.php" method="POST">

              <h3 class="text-center"> <i class="fa fa-users"></i> Add Vendor</h3   >

              <div class="form-group">

                  <label class="control-label">Vendor Name</label>

                  <input class="form-control" type="text" name="fullname" placeholder="Enter Vendor Name" required="">

                </div>

                <div class="form-group">

                  <label class="control-label">Vendor Organisation</label>

                  <input class="form-control" type="text" name="organisation"  placeholder="Enter Organisation Name" required="">

                </div>

                <div class="form-group">

                  <label class="control-label">Vendor Contact No</label>

                  <input class="form-control" type="text" name="mobile"  placeholder="Enter Contact No" required="">

                </div>

                <div class="form-group">

                  <label class="control-label">Vendor Emaill Address</label>

                  <input class="form-control" type="text" name="email"  placeholder="Enter Email Address" required="">

                </div>

                <div class="form-group">

                  <label class="control-label">Enter Username</label>

                  <input class="form-control" type="text" name="username"  placeholder="Enter Username" required="">

                </div>

                <div class="form-group">

                  <label class="control-label">Vendor Account Password</label>

                  <input class="form-control" type="text" name="password" placeholder="Enter Vedor Account Password" value="user@123" readonly="" required="">

                </div>

                <div class="form-group">

                  <button type="submit" class="btn btn-primary btn-block" name="add_vendor"><i class="fa fa-plus-circle" aria-hidden="true"></i>

                   Add Vendor</button>

                </div>

              </form>

            </div>

          </div>

        </div>

      </div>

    </main>



<?php include 'include/footer.php';?>



