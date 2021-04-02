
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
     input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
}
   </style>
  </head>


<body>

  <div class="pageWrap">
    <?php include 'include/header.php'; ?>
  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#"></a></li>
      
      </ul>
    </div>
  </section>  <!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
        <header class="heading-3 page-heading">
          <h4>questions? click link to read <span class="text-primary"><a href="faq.php">FAQ</a></span></h4>
        </header>
        
        <div class="form-main-container">
          <div class="row">
            <div class="col-sm-5 col-lg-4">
              <header class="heading-5">
                <h4>01/</h4>
                <span>Get In <br>Touch</span>
              </header>
              <ul class="contact-list">
             <li><span class="iconic"><i class="fa fa-map-marker"></i></span>Aqeeq trading ,Ujjain (MP)</li>

                <li><span class="iconic"><i class="flaticon-call36"></i></span>(+91) 8889289036</li>
                <li><span class="iconic"><i class="flaticon-email15"></i></span><a href="#">sales@aqeeqtrading.com</a></li>
                <li><span class="iconic"><i class="flaticon-twitter16"></i></span><a href="#">@followaqeeqtrading</a></li>
                <li><span class="iconic"><i class="flaticon-facebook43"></i></span><a href="#">facebook.com/aqeeqtrading</a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-lg-8">
              <div class="form-section-box">
                <header class="heading-5 text-center">
                  <h4>02/</h4>
                  <span>Send us a <br>Message</span>
                </header>
        <div id="message"></div>
                <form id="" class="checkout-form" method="post" action="#">

                  <div class="form-group row">
                    <label class="col-md-2 label-md">Name*</label>
                    <div class="col-md-10">
                      <input type="text" id=""  class="form-control" required placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 label-md">Email*</label>
                    <div class="col-md-10">
                      <input type="email" id="contact_email" class="form-control" required placeholder="Email Address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 label-md">Phone*</label>
                    <div class="col-md-10">
                      <input type="number" id="" max="10" class="form-control" required placeholder="Phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 label-md">Comments*</label>
                    <div class="col-md-10">
                      <textarea id="contact_message" class="form-control" required placeholder="Comments"></textarea>
                    </div>
                  </div>
                  <p class="text-center"><input type="submit" id="submit_btns" class="btn btn-default btn-lg" value="Send"></p>

                </form>
              </div><!-- /form-section-box -->
            </div>
          </div>
        </div><!-- /form-main-container -->


      </div><!-- /cart-block -->
    </div>

  </section>

  <section class="section-focus bg-dark" style="display: none;"> 
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

<script>
function goBack() {
  window.history.back();
}

</body>
</html>
