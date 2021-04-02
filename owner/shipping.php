<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Shipping Charges</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Add Shipping Charges</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
         
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Shipping Charges</th>
                   
                    <th>Action</th>
                    

                  </tr>
                </thead>
                <tbody>
              <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `shipping`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    
                    <td><?php echo $datas['ship_amount']; ?></td>
                 <td><a href="edit-ship.php?ship=<?php echo $datas['ship_amount']; ?>"><img src="https://static.thenounproject.com/png/89031-200.png"style="width: 20px;height: 20px"></a>
                  <span style="font-size: 20px;">&nbsp;|&nbsp;</span>
                    <a href="controller/delete-ship.php?id=<?php echo $datas['ship_amount']; ?>"><img src="https://image.flaticon.com/icons/png/512/61/61848.png"style="width: 20px;height: 20px"></a></td>
                    
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