<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i> Offer Amount</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Offer Amount</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
              <div class="col-md-10 ">
              <form action="controller/add-offamount.php" method="POST">
                 <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqlss = mysqli_query($con,"Select * from `offer_amount` where id='1'"); 
              while($datass = mysqli_fetch_array($sqlss)){
                $amount=$datass['amount'];
                $per=$datass['per'];
                $referal_amount=$datass['referal_amount'];

             }?>
                <div class="row">
                  <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Enter Product Purchase Amount</label>
                  <input class="form-control" type="text" value="<?php echo $amount;?>" name="pamount" placeholder="Enter Product Purchase Amount" >
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Enter % On Cashback </label>
                  <input class="form-control" type="text" value="<?php echo $per;?>" name="cashback" placeholder="Enter % On Cashback" >
                </div>
              </div>
               
               <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Enter Referal Amount</label>
                  <input class="form-control" type="text" value="<?php echo $referal_amount;?>" name="offer_amount" placeholder="Enter Referal Amount" >
                </div>
              </div>
         </div>
              </div>
            <!--   <div class="col-md-5">
                <div class="form-group">
                  <label class="control-label">Enter Categories Link</label>
                  <input class="form-control" type="text" name="cat_link" placeholder="Enter Categories Link">
                </div>
              </div> -->
              <div class="col-md-2">
               <button type="submit" class="btn btn-primary add-cat-btn" name="amount" style="margin-top: 25px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Update Offer</button>
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
                    <th>Product Purchase Amount</th>
                    <th>% On Amount</th>
                    <th>Referal Amount</th>
                    
                  </tr>
                </thead>
                <tbody>
              <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `offer_amount`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['amount'].".00"; ?></td>
                    <td><?php echo $datas['per']."%"; ?></td>
                    <td><?php echo $datas['referal_amount'].".00"; ?></td>
                   
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