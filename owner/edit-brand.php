<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil" aria-hidden="true"></i> Edit Brand</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Brand</a></li>
        </ul>
      </div>
      <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `brand` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-10 ">
              <form action="controller/edit-brand.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Edit Brand Name</label>
                  <input class="form-control" type="text" name="brand" value="<?php echo htmlspecialchars($datas['brand_name']);?>" placeholder="Enter Brand Name">
                </div>
              </div>
                 <div class="col-md-10 ">
                     <img src = '../product/<?php echo htmlspecialchars($datas['f_newfile']);?>' height="200" width="200">
                <div class="form-group">
                  <label class="control-label">Upload Brand Images</label>
                  <input class="form-control" type="file" name="photo">
                </div>
              </div>
            <!--   <div class="col-md-5">
                <div class="form-group">
                  <label class="control-label">Enter Categories Link</label>
                  <input class="form-control" type="text" name="cat_link" placeholder="Enter Categories Link">
                </div>
              </div> -->
              <div class="col-md-2">
                <input type="hidden" value="<?php echo htmlspecialchars($_GET['id']); ?>" name="id">
               <button type="submit" class="btn btn-primary add-cat-btn" name="add_brand" style="margin-top: 25px;"><i class="fa fa-edit" aria-hidden="true"></i> Edit Brand</button>
             </form>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
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