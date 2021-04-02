<?php include 'include/header.php';?>
 </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-shopping-cart"></i> Order History</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <button class="btn btn-primary btn-filter"><i class="fa fa-filter" aria-hidden="true"></i>  Advance Filter</button>
        </ul>
      </div>
      <div class="row filter" style="display: none;">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="" method=""> 
              <div class="row">
               <div class="col-md-3">
                <div class="form-group">
                  <label for="sel1">Filter By Date</label>
                    <input type="date" class="form-control" name="date"> 
                    <input type="date" class="form-control" name="from">                
                </div>
              </div>
              <div class="col-md-1">
                <button class="btn btn-primary" style="margin-top: 30px;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> 
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="sel1">Select Filter By Month</label>
                    <select class="form-control" onchange="javascript:location.href = this.value;">
                    <option>Choose Month
                    </option>
                    <option value="order-history.php?month=January&amp;year=2019">January
                    </option>
                    <option value="order-history.php?month=February&amp;year=2019">February
                    </option>
                    <option value="order-history.php?month=March&amp;year=2019">March
                    </option>
                    <option value="order-history.php?month=April&amp;year=2019">April
                    </option>
                    <option value="order-history.php?month=May&amp;year=2019">May
                    </option>
                    <option value="order-history.php?month=June&amp;year=2019">June
                    </option>
                    <option value="order-history.php?month=July&amp;year=2019">July
                    </option>
                    <option value="order-history.php?month=August&amp;year=2019">August
                    </option>
                    <option value="order-history.php?month=September&amp;year=2019">September
                    </option>
                    <option value="order-history.php?month=October&amp;year=2019">October
                    </option>
                    <option value="order-history.php?month=November&amp;year=2019">November
                    </option>
                    <option value="order-history.php?month=December&amp;year=2019">December
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                   <div class="form-group">
                  <label for="sel1">Select Filter By Delivery Status</label>
                    <select class="form-control" onchange="javascript:location.href = this.value;">
                    <option>Choose By Delivery Status
                    </option>
                      <?php
                      require_once('autho/data-autho.php');
                      $sqls = mysqli_query($con,"Select * from `deliver_status`"); 
                      while($datas = mysqli_fetch_array($sqls)){ ?>
                      <option value="order-history.php?status=<?php echo $datas['title']; ?>"><?php echo $datas['title']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              </div>
              </form>              
            </div>
          </div>
        </div> 
        </div>     




      <?php
      if (isset($_GET['del'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Deleted Successfully !
        </div>';
      }

      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Order Status</th>
                    <th>Method</th>
                    <th>Action</th>
                    <th>Labeling</th>
                    <th>Add Status</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              // if (isset($_GET['date'])) {
              // $getdate=htmlspecialchars($_GET['date']);
              // $newDate = date("d/m/Y", strtotime($getdate));  
              // $sqls = mysqli_query($con,"Select * from `orders` where date = '$newDate' order by date desc ");               
              // }
              if (isset($_GET['date']) or isset($_GET['from'])) {
              $getdate=htmlspecialchars($_GET['date']);
              $fromdate=htmlspecialchars($_GET['from']);
              $newDate = date("d/m/Y", strtotime($getdate));
              $newFromDate = date("d/m/Y", strtotime($fromdate));  
              $sqls = mysqli_query($con,"SELECT * from `orders` where 'date' 
BETWEEN '$newDate' OR '$newFromDate' order by date desc ");
              // $sqls = mysqli_query($con,"Select * from `orders` where date = '$newDate' order by date desc ");               
              }
              elseif (isset($_GET['month'])) {
              $getmonth=htmlspecialchars($_GET['month']);  
              $sqls = mysqli_query($con,"Select * from `orders` where month = '$getmonth' order by id desc ");               
              }
              elseif (isset($_GET['status'])) {
              $getstatus=htmlspecialchars($_GET['status']);  
              $sqls = mysqli_query($con,"Select * from `orders` where status = '$getstatus' order by date desc ");               
              }
              else{
              $sqls = mysqli_query($con,"Select * from `orders` Group By order_id order by id desc ");                 
              }
              while($datas = mysqli_fetch_array($sqls)){ ?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['date']; $getuser_id = $datas['user_id']; ?></td>
                    <td><?php echo $datas['time']; ?></td>
                    <?php 
                    require_once('autho/data-autho.php');
                    $sqlsu = mysqli_query($con,"Select * from `user` where user_id = '$getuser_id' "); 
              while($datasu = mysqli_fetch_array($sqlsu)){?>
                    <td><?php echo ucwords($datasu['name']); ?></td>
                    <td><?php echo $datasu['mobile']; ?></td>
              <?php } ?>
                    <td><span class="badge badge-pill badge-light" style="font-size: 100% !important; border: 1px solid black;"><?php echo $datas['status']; ?></span></td>

                    <td><span><?php echo ucwords($datas['payment_mode']); ?></span>
                      <span><?php echo ucwords($datas['transaction_id']); ?></span>
                    </td>

                    <td><a href="invoice.php?id=<?php echo $datas['order_id']; ?>" class="btn btn-primary"> <i class="fa fa-share" aria-hidden="true"></i>
                    View More</a>
                  </td>
                  <td>
                     <a href="billing-invoice.php?id=<?php echo $datas['order_id']; ?>" class="btn btn-primary"> <i class="fa fa-share" aria-hidden="true"></i>Labeling</a>
                    </td>
                    <td><a href="add-order-status.php?id=<?php echo $datas['order_id']; ?>" class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add Status</a></td>
                  </tr>
              <?php } ?>    
                </tbody>
              </table>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable(
       {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[ 0, "asc" ]],
        "pageLength": 10
    } 

  );</script> 

<script type="text/javascript">
  $('.table-asc0').dataTable({
  order: [[0, 'asc']]
});
</script>
     <script>
      $(document).ready(function(){
        $('.btn-filter').click(function(){
          $('.filter').slideToggle();
        });
      });
    </script>
  </body>
 </html>