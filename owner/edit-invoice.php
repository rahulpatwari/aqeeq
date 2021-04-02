<?php include 'include/header.php';?>
 </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
        <h1><i class="fa fa-user-circle"></i> User Manage</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">User Manage</a></li>
        </ul>
      </div>
      <?php
      if (isset($_GET['del'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> User Deleted Successfully !
        </div>';
      }

      ?>
      <?php
      if (isset($_GET['update'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Updated Successfully !
        </div>';
      }

      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h5>Net Payable Amount is :- <?php 
               $id=htmlspecialchars($_GET['id']);
               $res = mysqli_query($con,'SELECT sum(product_price) FROM orders where uniqid = "'.$id.'"  ');
        $row = mysqli_fetch_row($res);
        echo $total_amount = $row[0];?></h5><br>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `orders` where uniqid = '$id'"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['product_name']; ?></td>
                    <td><?php echo $datas['product_qty']; ?></td>
                    <td><?php echo $datas['product_price']; ?></td>
                    <td><a href="controller/invoice-del.php?id=<?php echo $datas['id']; ?>&order_id=<?php echo $id; ?>">Remove</a></td>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable(
       {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[ 1, "desc" ]],
        "pageLength": 10
    } 

  );</script>