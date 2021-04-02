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
                  <form action="controller/add-order-status.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="exampleInputEmail1"><h3 style="text-align: center;">Add Delivery Status Here</h3></label>
                    
                    <div class="form-group">
                  <label class="control-label">Add Title</label>
                  <select class="form-control dispatchedselect" name="title">
                   <option>Choose Status</option>	
                     <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `deliver_status`"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>
              <option class="<?php echo $datas['title']; ?>"><?php echo $datas['title']; ?></option>
              <?php } ?>  
                  </select>  
                </div>

                <div class="otoptions" style="display: none;">
                 <div class="form-group">
                  <label class="control-label">Estimate Delievery Day</label>
                  <input class="form-control" type="number" name="estimate_day" min="1" placeholder="Estimate Day">
                </div>

                 <div class="form-group">
                  <label class="control-label">Add Tracking id</label>
                  <input class="form-control" type="text" name="tracking_id" placeholder="Enter Tracking Id">
                </div>

                 <div class="form-group">
                  <label class="control-label">Courier's Url</label>
                  <input class="form-control" type="text" name="dartname" placeholder="Courier's Url">
                </div>
            	</div>


                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
                    
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Add Status</button>
                  </form>
              <!-- End Form Here -->
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

      <script>  
                     $(document).ready(function(){
                      $('.dispatchedselect').change(function(){
                        if($('.dispatchedselect').val() == 'Dispatched'){
                             $('.otoptions').show();
                        }
                        else{
                             $('.otoptions').hide();
                         }
                      }); 


                     });
                     </script> 
    <!-- Page specific javascripts-->
  </body>
</html>