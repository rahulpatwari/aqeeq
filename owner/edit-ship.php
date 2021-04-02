<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit" aria-hidden="true"></i> Edit Shipping Charges</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-edit" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Shipping Charges</a></li>
        </ul>
      </div>
    <div class="row">
        <div class="col-md-6 offset-3">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              
                <?php
              require_once('autho/data-autho.php');
              $ship=htmlspecialchars($_GET['ship']);
              $sqlss = mysqli_query($con,"Select * from `shipping` where ship_amount = '$ship'"); 
              while($datass = mysqli_fetch_array($sqlss)){?>  
              <form action="controller/add-shipping.php" method="POST">
              
            <div class="col-md-10">
                <div class="form-group">
                  <label class="control-label">Enter Shipping Charges</label>
                  <input class="form-control" type="text" name="sub_cat" placeholder="Shipping Charges" value="<?php echo $datass['ship_amount']; ?>">
                </div>
              </div>
              
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['ship']); ?>">
              <div class="col-md-2">
               <center><button type="submit" class="btn btn-primary add-cat-btn" name="submit" style="margin-top: 27px;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Shipping Charges</button></center>
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