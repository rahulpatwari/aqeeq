<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i>Manage Product</h1>
        </div>
       
      </div>
  
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
             <?php if(isset($_GET['all'])){?>
           <div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Serial No <?php echo $_GET['serial'];?> Already !</strong>
        </div>
          <?php }?>
            <div class="tile-body">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                   <!--  <th>Serial No.</th> -->
                    <th>Input</th>
                    <th>Edit Serial No.</th>
                  
                  </tr>
                </thead>
                <tbody>
              <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              if (isset($_GET['sub'])) {
              $sub=htmlspecialchars($_GET['sub']);
              $sqls = mysqli_query($con,"Select * from `products` where sub = '$sub'"); 
              }
              else{
              $sqls = mysqli_query($con,"Select * from `products`");                 
              }
              while($datas = mysqli_fetch_array($sqls)){?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['product_name']; ?></td>
                  <!--   <td><?php echo $datas['serial_no']; ?></td> -->
                    <form action="controller/manage.php" method="POST">
                    <td><input type="text" placeholder="Enter Serial Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $datas['serial_no'];?>" name="serial"></td>
                    <td>
                      <input type="hidden" name="id" value="<?php echo $datas['id']; ?>">
                      <input type="hidden" name="sub" value="<?php echo $datas['sub']; ?>">
                      <input type="submit" name="submit" class="btn btn-primary" value="Edit"> 
                    </td>
                    </form>
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