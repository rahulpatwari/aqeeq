<?php
  require_once('config.php');
  require_once('controller/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta name="theme-color" content="#e32a53" />
    <title>Aqeeq</title>
     <link href="css/jquery-ui.css" rel="stylesheet">

   <?php include 'include/css.php'; ?>

 <style type="text/css">
   .w-100{
    width: 100%;
   }

   th.headerss {
    padding: 10px;
    text-align: center;
    background: #dcdcdc;
}

 </style>

   </head>
<body>

<div class="pageWrap">
  
  <?php include 'include/header.php'; ?>

  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li></li>
        
      </ul>
    </div>
  </section>  <!-- /section-banner -->

  <section class="section-compact">
    <div class="container text-center">
    <div class="table-responsive">
                           
                                <table class="product-table w-100">
                                    <thead>
                                        <tr>                                                                       
                                            <th class="headerss">Product Detail</th> 
                                            <th class="headerss">Product Name</th> 
                                            <th class="headerss">Order Date</th>                                             
                                            <th class="headerss">Quantity</th>
                                            <th class="headerss">Status</th>
                                            <th class="headerss">Product price</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php
              require_once('owner/autho/data-autho.php');
              
              $sqls = mysqli_query($con,"Select * from `orders` where user_id= '$user_id' order  by id desc"); 
              while($datas = mysqli_fetch_array($sqls)){ 
              $order_id=$datas['order_id'];

              $sqlso = mysqli_query($con,"Select * from `order_log` where order_id = '$order_id' "); 
              while($dataso = mysqli_fetch_array($sqlso)){ 
              $product_code=$dataso['product_code'];
              



                ?>
                                        <tr style="margin-top: 10px;">
                                            <td class="image">
                                                <div class="white-bg">
                                                      
                                                        <?php
              require_once('owner/autho/data-autho.php');
              $sqlsi = mysqli_query($con,"Select * from `products` where product_code = '$product_code' "); 
              while($datasi = mysqli_fetch_array($sqlsi)){ 
                ?>
                                                      <img src="product/<?php echo $datasi['f_newfile']; ?>" style="height:100px;width:auto;margin-top: 
                                                   10px;" alt="">
                                                   <?php } ?> 

                                                  </a> 
                                                </div>
                                            </td>
                                            <td> 
                                                <div class="text-center pt-20">  <strong class="fsz-20"><?php echo $dataso['product_name']; ?> </strong>  </div>
                                            </td>  
                                           <td> 
                                                <div class="text-center pt-20"> <b class="fsz-16"> <?php echo $dataso['date']; ?> </b> </div>
                                            </td>
                                            <td>
                                                <div class="prod-btns fontbold-2">
                                                    <b class="fsz-16"> <?php echo $dataso['quantity']; ?> </b>
                                                </div>
                                            </td>

                                            <td><span class="badge badge-pill badge-light" style="font-size: 100% !important; border: 1px solid black; color: #000; background-color: #fff;"><?php echo $datas['status']; ?></span></td>      


                                            <td> 
                                                <div class="price fontbold-2"> 
                                                    <strong class="fsz-20"><?php echo $dataso['subtotal']; ?></strong> 
                                                </div>
                                            </td> 
                                                                                   
                                        </tr>      
                            <?php } } ?>
                                    </tbody>                               
                                </table>

                                <div class="continue-shopping text-center">
                                    <a href="my-account.php" class="theme-btn btn"> Back to account </a>
                                </div>

                            </form>
                        </div>
    </div>

  </section>



     <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->

</div><!-- /pageWrap -->


<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>

</body>
</html>
