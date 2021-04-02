<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Categories</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <select class="form-control" onchange="javascript:location.href = this.value;">
                    <option>Filter By Categories</option>
                     <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `cat`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                 <option value="subcat.php?cat=<?php echo $datas['cat']; ?>"><?php echo $datas['cat']; ?></option>
              <?php } ?>
                  </select>
        </ul>
      </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-4">
              <form action="controller/add-sub-categories.php" method="POST">
                <div class="form-group">
                  <script>
              function myFunction8() {
                  var myWindow = window.open("add-images.php", "", "width=1600,height=1600");
              }
              </script>
                  <input class="form-control" type="hidden" name="cat" placeholder="Enter Categories Name" value="<?php echo $_GET['cat']; ?>">
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">Enter Sub Categories Name</label>
                  <input class="form-control" type="text" name="sub_cat" placeholder="Enter Sub Categories Name">
                </div>
              </div>
             
              <div class="col-md-4">
               <center><button type="submit" class="btn btn-primary add-cat-btn" name="add_cat" style="margin-top: 27px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Categories</button></center>
             </form>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date Time</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Action</th>
                    <th>Manage Product</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              if (isset($_GET['cat'])) {
              $getcat=htmlspecialchars($_GET['cat']);
              $sqls = mysqli_query($con,"Select * from `sub` where cat = '$getcat'"); 
              }
              else{
              $sqls = mysqli_query($con,"Select * from `sub`");                 
              }
              while($datas = mysqli_fetch_array($sqls)){?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['date']; ?> <?php echo $datas['time']; ?></td>
                    <td><?php echo $datas['cat']; ?></td>
                    <td><?php echo $datas['sub']; ?></td>
                    <td><a href="edit-subcat.php?id=<?php echo $datas['id']; ?>"><!-- <i class="fa fa-edit" aria-hidden="true"></i> --><!-- <img src="https://image.flaticon.com/icons/png/512/61/61456.png"style="width: 20px;height: 20px"> --><img src="https://static.thenounproject.com/png/89031-200.png"style="width: 20px;height: 20px"></a>
                      <span style="font-size: 20px;">&nbsp;|&nbsp;</span>
                     <a href="controller/delete-sub-cat.php?id=<?php echo $datas['id']; ?>&cat=<?php echo $getcat;?>" onclick="alert('<?php echo $datas['sub']; ?>')"><!-- <i class="fa fa-trash" aria-hidden="true"></i> --><img src="https://image.flaticon.com/icons/png/512/61/61848.png"style="width: 20px;height: 20px"></a></td>
                     <td> <a href="manage-product/index.php?sub=<?php echo $datas['sub']; ?>">Manage</a></td>
                  </tr>
              <?php } ?>    
                </tbody>
              </table>
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
    <script type="text/javascript">$('#sampleTable').DataTable();$('.dataTables_filter input').attr("placeholder", "Search By Keyword");</script>
  </body>
</html>