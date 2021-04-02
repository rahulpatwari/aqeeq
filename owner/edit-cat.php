<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil" aria-hidden="true"></i> Edit Categories</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Categories</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-10 ">
              <form action="controller/edit-categories.php" method="POST">
                <div class="form-group">
                  <label class="control-label">Edit Categories Name</label>
                  <input class="form-control" type="text" name="cat" value="<?php echo htmlspecialchars($_GET['cat']);?>" placeholder="Enter Categories Name">
                </div>
              </div>
            <!--   <div class="col-md-5">
                <div class="form-group">
                  <label class="control-label">Enter Categories Link</label>
                  <input class="form-control" type="text" name="cat_link" placeholder="Enter Categories Link">
                </div>
              </div> -->
              <div class="col-md-2">
                <input type="hidden" value="<?php echo htmlspecialchars($_GET['cat']); ?>" name="gcat">
               <button type="submit" class="btn btn-primary add-cat-btn" name="add_cat" style="margin-top: 25px;"><i class="fa fa-edit" aria-hidden="true"></i> Edit Categories</button>
             </form>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>