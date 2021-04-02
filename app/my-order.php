<?php
  require_once('../config.php');
  require_once('../controller/session.php');
?>


<?php include('include/header.php');?>
<?php
  require_once('../owner/autho/data-autho.php');
  
  $sqls = mysqli_query($con,"Select * from `orders` where user_id= '$user_id' order  by id desc"); 
    $count=mysqli_num_rows($sqls);

  while($datas = mysqli_fetch_array($sqls)){ 
  $order_id=$datas['order_id'];

  $sqlso = mysqli_query($con,"Select * from `order_log` where order_id = '$order_id' "); 
  while($dataso = mysqli_fetch_array($sqlso)){ 
  $product_code=$dataso['product_code'];
}
}              
 ?>

        <div class="container">
            <div class="subtitle h6">
                <div class="d-inline-block">
                    My Orders<br>
                    <p class="small text-mute"><?php echo $count; ?> Orders</p>
                </div>
            </div>
<?php
  require_once('../owner/autho/data-autho.php');
  
  $sqls = mysqli_query($con,"Select * from `orders` where user_id= '$user_id' order  by id desc"); 
  while($datas = mysqli_fetch_array($sqls)){ 
  $order_id=$datas['order_id'];

  $sqlso = mysqli_query($con,"Select * from `order_log` where order_id = '$order_id' "); 
  $count=mysqli_num_rows($sqlso);
  while($dataso = mysqli_fetch_array($sqlso)){ 
  $product_code=$dataso['product_code'];
              
 ?>
            <div class="row">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item active">
                            <h6 class="mb-0"><?php echo $dataso['date']; ?></h6>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                               <!--  <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div> -->

                                                <?php
      require_once('../owner/autho/data-autho.php');
      $sqlsi = mysqli_query($con,"Select * from `products` where product_code = '$product_code' "); 
      while($datasi = mysqli_fetch_array($sqlsi)){ 
        ?>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="../product/<?php echo $datasi['f_newfile']; ?>" alt="" class="vm"></figure>
                                </div>
                            <?php } ?>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block"><?php echo $dataso['product_name']; ?> </a>
                                    <h5 class="text-success font-weight-normal mb-0"><?php echo $dataso['subtotal']; ?><sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">Status <span class=" text-success ml-2"><?php echo $datas['status']; ?></span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <!-- <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div> -->
                                        <input type="text" class="form-control w-35" placeholder="" value="<?php echo $dataso['quantity']; ?>">
                                       <!--  <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/perfume.jpg" alt="" class="vm"></figure>
                                </div>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block">Green Grapes </a>
                                    <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">1.0 kg <span class=" text-success ml-2">10% off</span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="3">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/perfume.jpg" alt="" class="vm"></figure>
                                </div>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block">Orange</a>
                                    <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">1.0 kg <span class=" text-success ml-2">10% off</span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="11">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li class="list-group-item">
                            <a href="#" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Update Order</span><i class="material-icons">arrow_forward</i></a>
                        </li> -->
                    </ul>
                </div>
            </div>
 <?php } } ?>
          <!--   <div class="row">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item active">
                            <h6 class="mb-0">18 December 2019</h6>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/perfume.jpg" alt="" class="vm"></figure>
                                </div>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block">Red Apple </a>
                                    <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">1.0 kg <span class=" text-success ml-2">10% off</span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="5">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/perfume.jpg" alt="" class="vm"></figure>
                                </div>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block">Green Grapes </a>
                                    <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">1.0 kg <span class=" text-success ml-2">10% off</span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="3">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link text-danger p-0 float-right"><i class="material-icons">delete</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/perfume.jpg" alt="" class="vm"></figure>
                                </div>
                                <div class="col px-0">
                                    <a href="#" class="text-dark mb-1 h6 d-block">Orange</a>
                                    <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0">1.0 kg <span class=" text-success ml-2">10% off</span></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="11">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Update Order</span><i class="material-icons">arrow_forward</i></a>
                        </li>
                    </ul>
                </div>
            </div>
 -->
        </div>
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-link-default ">
                                <i class="material-icons">store_mall_directory</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.html" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="cart.html" class="btn btn-default shadow centerbutton">
                                <i class="material-icons">local_mall</i>
                                <span class="cart_counter">1</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="favorite-products.html" class="btn btn-link-default active">
                                <i class="material-icons">favorite</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="profile.php" class="btn btn-link-default">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- nouislider js -->
    <script src="vendor/nouislider/nouislider.min.js"></script>

    <!-- chosen multiselect js -->
    <script src="vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {

        });

    </script>
</body>

</html>
