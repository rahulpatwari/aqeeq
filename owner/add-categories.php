<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Categories</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Add Categories</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-10 ">
              <form action="controller/add-categories.php" method="POST">
                <div class="form-group">
                  <label class="control-label">Enter Categories Name</label>
                  <input class="form-control" type="text" name="cat" placeholder="Enter Categories Name" required>
                </div>
              </div>
            <!--   <div class="col-md-5">
                <div class="form-group">
                  <label class="control-label">Enter Categories Link</label>
                  <input class="form-control" type="text" name="cat_link" placeholder="Enter Categories Link">
                </div>
              </div> -->
              <div class="col-md-2">
               <button type="submit" class="btn btn-primary add-cat-btn" name="add_cat" style="margin-top: 25px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Categories</button>
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
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>DateTime</th>
                    <th>Category</th>
                    <th>Action</th>
                    <th>Add Sub Category</th>

                  </tr>
                </thead>
                <tbody>
              <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `cat` where cat='Products'"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $get_date = $datas['date']; ?> <?php echo $datas['time']; ?></td>
                    <td><?php echo $datas['cat']; ?></td>
                 <td><a href="edit-cat.php?cat=<?php echo $datas['cat']; ?>"><!-- <i class="fa fa-edit" aria-hidden="true"></i> --><img src="https://static.thenounproject.com/png/89031-200.png"style="width: 20px;height: 20px"></a>
                  <span style="font-size: 20px;">&nbsp;|&nbsp;</span>
                    <a href="controller/delete-cat.php?id=<?php echo $datas['cat']; ?>"><!-- <i class="fa fa-trash" aria-hidden="true"></i> --><img src="https://image.flaticon.com/icons/png/512/61/61848.png"style="width: 20px;height: 20px"></a></td>
                    <td>
                    <a href="subcat.php?cat=<?php echo $datas['cat']; ?>"><!-- <i class="fa fa-trash" aria-hidden="true"></i> -->Add</a></td>
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