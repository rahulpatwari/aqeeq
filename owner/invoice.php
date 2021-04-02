<?php require_once('include/header.php'); ?>
     <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `orders` WHERE order_id = '$id' "); 
              while($datas = mysqli_fetch_array($sqls)){
              $getuser_id = $datas['user_id'];  
               require_once('autho/data-autho.php');
                    $sqlsu = mysqli_query($con,"Select * from `user` where user_id = '$getuser_id' "); 
              while($datasu = mysqli_fetch_array($sqlsu)){
              $name=$datasu['name'];
              $mobile=$datasu['mobile'];
              $email=$datasu['email'];
              $address=$datasu['address'];
              $zip=$datasu['zip'];
              $city=$datasu['city'];
              } 

               ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
          <p>A Printable Order Invoice</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Invoice</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header">
                  	<img src="http://aqeeqtrading.com/images/logo-aqeeq.png" width="200" height="60">
                  </h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: <?php echo $datas['date']; ?></h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">From
                  <address><strong>company name</strong><br>Indus Town Colony<br>Pithampur<br>Dhar<br>Email: contact@info.in</address>
                </div>
                <div class="col-4">To
                  <address><strong><?php echo ucwords($name); ?></strong><br><?php echo $address; ?><br><?php echo $city; ?> <?php echo $zip; ?><br>Phone: (+91) <?php echo $mobile; ?></address>
                </div>
                <div class="col-4"><b>Invoice #00<?php echo $datas['id']; ?></b><br><b>Order ID:</b> <?php echo $datas['order_id']; ?><br><b>Payment Due:</b> <?php echo $datas['date']; ?><br><b>Method:</b> Cash On Delivery<br><b>Estimate Deliver:</b> <?php echo $datas['estimate_day']; ?> Days <br><b>Tracking Id:</b> <?php echo $datas['tracking_id']; ?><br></div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $id=htmlspecialchars($_GET['id']);
              $sqls2 = mysqli_query($con,"Select * from `order_log` WHERE order_id = '$id'"); 
              while($datas2 = mysqli_fetch_array($sqls2)){ $product_code=$datas2['product_code'];?>	
                      <tr>
                        <?php $sql="SELECT * from products where product_code='".$product_code."'";
  $res=mysqli_query($con,$sql);
  while ($data=mysqli_fetch_array($res)) {
       $brand=$data['brand'];}?>
                        <td><?php echo $s_no++; ?></td>
                        <td><?php echo $datas2['quantity']; ?></td>
                        <td><?php echo $brand." ".$datas2['product_name']; ?></td>
                        <td><?php echo $datas2['subtotal']; ?>.00</td>
                      </tr>
                <?php } ?>      
                    </tbody>
                  </table>

                  <hr>
                  <div class="row">
                  <div class="col-md-4">
                    <img src="http://www.barcodes4.me/barcode/c39/<?php echo $datas['order_id']; ?>.png">
                  </div>  
                  <div class="col-md-4"></div>  
                  <div class="col-md-4"> 
                  <strong>Gross Amount is :- <?php echo $datas['amount']; ?>.00</strong><br><strong>Shipping Amount is :- <?php echo $datas['shipping']; ?>.00</strong><br><strong>Discount Amount is :- <?php echo $datas['discount']; ?>.00</strong><br><strong>Payable Amount is :- <?php echo $datas['total']; ?>.00</strong>
                  </div>
                  </div>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
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
<?php } ?>