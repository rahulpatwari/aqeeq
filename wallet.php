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

  .bg-lights {
    background: #f1f1f1;
    width: 47%;
    margin: 10px;
    padding: 10px;
    min-height: 115px;
    border-radius: 2%;
}

@media (max-width: 768px) {

  .bg-lights {

  	width: 100%;
  }

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
       
    </div>
  </section>


 <section class="section-compact">
    <div class="container">
      <div class="cart-block">
      
        <h1><?php echo $reduce_amount;?></h1>
        <div class="form-main-container">
          <div class="row">
            <div class="col-sm-4">
              <div class="shipping-info">
                <div class="section-inner">
                  
               
                </div><!-- /section-inner -->

              
              </div><!-- /shipping-info -->
            </div>
         </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section-focus bg-dark">
    <div class="container">
      
      <div class="promo-box">
        <div class="row">
          <div class="col-sm-9">
            <p><strong>Rewards Club</strong> - Reward yourself Perfume Points everytime you spend</p>
          </div>
          <div class="col-sm-3">
            <a href="index.php" class="btn btn-default btn-lg">Start Shopping</a>
          </div>
        </div>
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
