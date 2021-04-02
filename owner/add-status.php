<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-stack-exchange" aria-hidden="true"></i> Add Status</h1>
        </div>
 <!--        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Add Images</a></li>
        </ul> -->
      </div>        
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
              <!-- Start Form Here -->
                  <form action="controller/add-status.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="exampleInputEmail1"><h3 style="text-align: center;">Add Delivery Status Here</h3></label>
                    
                    <div class="form-group">
                  <label class="control-label">Add Title</label>
                  <input class="form-control" type="text" name="title" placeholder="Add Title" required="">
                </div>
                    
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Add Status</button>
                  </form>
              <!-- End Form Here -->
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title Here</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `deliver_status` order by id desc"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>       
                   <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['title']; ?></td>
                    <td><a href="controller/delete-status.php?id=<?php echo $datas['id']; ?>">Delete</a></td>
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
  </body>
</html>