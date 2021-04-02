<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit" aria-hidden="true"></i> Edit Sub Categories</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-edit" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Sub Categories</a></li>
        </ul>
      </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-5">
                <?php
              require_once('autho/data-autho.php');
              $getid=htmlspecialchars($_GET['id']);
              $sqlss = mysqli_query($con,"Select * from `sub` where id = '$getid'"); 
              while($datass = mysqli_fetch_array($sqlss)){?>  
              <form action="controller/edit-sub-categories.php" method="POST">
                <div class="form-group">
                  <script>
              function myFunction8() {
                  var myWindow = window.open("add-images.php", "", "width=1600,height=1600");
              }
              </script>
                  <label class="control-label">Edit Main Categories Name </label>
                  <select class="form-control" name="cat">
                    <option><?php echo $datass['cat']; ?></option>
                     <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `cat`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                 <option><?php echo $datas['cat']; ?></option>
              <?php } ?>
                  </select>
                </div>
              </div>
            <div class="col-md-5">
                <div class="form-group">
                  <label class="control-label">Enter Sub Categories Name</label>
                  <input class="form-control" type="text" name="sub_cat" placeholder="Enter Sub Categories Name" value="<?php echo $datass['sub']; ?>">
                </div>
              </div>
              
              <input type="hidden" name="gid" value="<?php echo htmlspecialchars($_GET['id']); ?>">
              <div class="col-md-2">
               <center><button type="submit" class="btn btn-primary add-cat-btn" name="add_cat" style="margin-top: 27px;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Sub Categories</button></center>
             </form>
           <?php } ?>
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