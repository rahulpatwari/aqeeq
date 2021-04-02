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
    <h3 class="text-center">Hello <?php echo $name ?> Generate Your Referal Link </h3>
    <center><input type="text" value="http://aqeeqtrading.com/referal.php?u=<?php echo $user_id; ?>" id="myInput" readonly="" style="width: 280px; height: 42px; background-color: #49141442;"> <button class="btn btn-primary" onclick="myFunction()">Copy</button></center>
  </section>  

  <section class="section-compact">
    <div class="container text-center">
    <div class="table-responsive">
                           
                                <table class="product-table w-100">
                                    <thead>
                                        <tr>                                                                       
                                            <th class="headerss">S.No</th> 
                                            <th class="headerss">Date</th> 
                                            <th class="headerss">Product Buy</th>                                             
                                            <th class="headerss">Earning</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php
              require_once('owner/autho/data-autho.php');
              $sno=1;
              $sqls = mysqli_query($con,"Select * from `referal` where referal_id= '$user_id' order  by id desc"); 
              while($datas = mysqli_fetch_array($sqls)){    
                ?>
                                        <tr style="margin-top: 10px;">
                                            
                                            <td> 
                                                <div class="text-center pt-20">  <strong class="fsz-20"><?php echo $sno++; ?> </strong>  </div>
                                            </td>  
                                            <td> 
                                                <div class="text-center pt-20">  <strong class="fsz-20"><?php echo $datas['date']; ?> </strong>  </div>
                                            </td> 
                                            <td> 
                                                <div class="text-center pt-20">  <strong class="fsz-20"><?php echo $datas['product']; ?> </strong>  </div>
                                            </td> 
                                            <td> 
                                                <div class="text-center pt-20">  <strong class="fsz-20"><?php echo $datas['amount']; ?> </strong>  </div>
                                            </td>  
                                         
                                                                                   
                                        </tr>      
                            <?php }  ?>
                                    </tbody>                               
                                </table>

                                <!-- <div class="continue-shopping text-center">
                                    <a href="my-account.php" class="theme-btn btn"> Back to account </a>
                                </div> -->

                            </form>
                        </div>
    </div>

  </section>

  <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>


     <!---footer--->
     <?php include 'include/footer.php'; ?>
     <!---footer--->

</div><!-- /pageWrap -->


<!-- JavaScript
================================================== -->
<?php include 'include/js.php'; ?>

</body>
</html>
