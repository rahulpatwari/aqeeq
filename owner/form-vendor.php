<?php include 'include/header.php';?>
 </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
        <h1><i class="fa fa-user-circle"></i>Dealer Management</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Dealer Management</a></li>
        </ul>
      </div>
      <?php
      

      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date</th>
                     <th>Firm Name</th>
                    <th>Vendor Id</th>
                   
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Description</th>
                    <th>Email</th>
                  <!--   <th>Date Of Birth</th> -->
                    <th>Address</th>
<!--                     <th>Status</th>
 -->                  </tr>
                </thead>
                <tbody>
                      <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `vendor`"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['date']; ?></td>
                    <td><?php echo $datas['firm']; ?></td>
                    <td><?php echo "aq".$datas['vendor_id']; ?></td>
                    <td><?php echo $datas['firstname']; ?></td>
                    <td><?php echo $datas['lastname']; ?></td>
                    <td><?php echo $datas['mobile']; ?></td>
                    <td><?php echo $datas['description']; ?></td>
                    <td><?php echo $datas['email']; ?></td>
                   <!--  <td><?php echo $datas['dob']; ?></td> -->
                    <td><?php echo $datas['address']; ?></td>
                  
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
        "order": [[ 1, "desc" ]],
         "order": [[ 0, 'asc' ], [ 1, 'asc' ]],
        "pageLength": 10

    } 

  );

</script>