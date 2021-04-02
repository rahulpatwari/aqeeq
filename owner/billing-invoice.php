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
              $state=$datasu['state'];
              $city=$datasu['city'];
              } 

               ?>

               <script type="text/javascript">
                 function printdiv(printpage) {
    var headstr = "<html><head><title></title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;

    document.body.innerHTML = headstr + newstr + footstr;

    window.print();
    document.body.innerHTML = oldstr;

    return false;
}
               </script>
               <style>

                 th, td, tr, tbody, thead {
    border: 1px solid #000!important;
}
.font-cs
{
  font-weight: 700;
  font-size: 16px;
}

               </style>
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

        
        <div style="height: 1800px ! important;width: 600px !important;">
          <div class="tile">
            <section class="invoice">
             
             <table class="table"border="1"style="border-top: 1px solid;border-bottom: 1px solid">
    <thead>
      <tr>
        <th colspan="3">Shipping Address :

 <address class="font-cs"><strong><h4><?php echo ucwords($name); ?></h4></strong><?php echo $address; ?><br><strong><?php echo $city; ?> - <?php echo $zip; ?> , <?php echo $state; ?></strong> <br>Phone: (+91) <?php echo $mobile; ?></address>

        </th>
       
      </tr>

    </thead>
     <tr>
      <td colspan="3" class="font-cs"> 
        <b>Order ID:</b> <?php echo $datas['order_id']; ?>
         <!--  <br><b>Payment Date:</b> <?php echo $datas['date']; ?><br><b>Method:</b>    Online -->
          <img src="http://www.barcodes4.me/barcode/c39/<?php echo $datas['order_id']; ?>.png">
      </td>
     </tr>
    <tbody>
      <tr>
        <td colspan="2" style="padding-bottom: 0;">Seller : 
         <h4>AQEEQ TRADING</h4>
          <p class="font-cs">65, Manakpura, Nagarchi Bakhal, Ujjain</br>
          MP-456006</br>
            GSTIN : 23LUXPS3890L1ZB </br>
            Mob : +918889289036
</p>
 
        </td>
        <td><center><img src="http://aqeeqtrading.com/images/lavel-logo.png" width="200" height="150"></center></td>
      
      </tr>
     
    </tbody>
  </table>
       
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table font-cs" border="1" style="border-top: 1px solid;border-bottom: 1px solid">
                    <thead>
                      <tr>
                       
                        
                        <th>Product</th>
                        <th>Qty</th>
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
                        <td><?php echo $brand." ".$datas2['product_name']; ?></td>
                         <td><?php echo $datas2['quantity']; ?></td>
                      </tr>
                <?php } ?>      
                    </tbody>
                  </table>

                  <hr>
                  <div class="row">
                  <div class="col-md-8">
                   
                  </div>  
                   <div class="d-print-none mt-2" style="margin-top: 30px !important; margin-left: 11px !important;
">
                <div class="col-md-4 text-right"><a class="btn btn-primary" href="javascript:window.print();"><i class="fa fa-print"></i> Print</a></div>
              </div>
               
                  </div>
                </div>
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