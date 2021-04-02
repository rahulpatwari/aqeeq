<?php include('include/header.php');?>
 <?php $data=$_SESSION["cart_products"];?>
                                <?php $varcount = count($data);

      ?>
        <div class="container">
            <div class="subtitle h6">
                <div class="d-inline-block">
                    My Cart<br>
                    <p class="small text-mute"><?php echo $varcount;?> Items</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush mb-4">

            <?php
  $get_overallproduct =  count($_SESSION["cart_products"]);
  if(isset($_SESSION["cart_products"])) //check session var

    {

    $total = 0; //set initial total value

    $b = 0; //var for zebra stripe table 

    foreach ($_SESSION["cart_products"] as $cart_itm)

        {

      //set variables to use in content below

      $product_name = $cart_itm["product_name"];

      $product_qty = $cart_itm["product_qty"];

      $product_price = $cart_itm["product_price"];

      $product_shipment.= $cart_itm["shipment"];

      $product_code = $cart_itm["product_code"];

      //$product_color = $cart_itm["product_color"];

      $subtotal = ($product_price * $product_qty);



                ?>
                         <?php
              require_once('../owner/autho/data-autho.php');
              $sqlsi = mysqli_query($con,"Select * from `products` where product_code = '$product_code' "); 
              while($datasi = mysqli_fetch_array($sqlsi)){ 
                $getproduct_id=htmlspecialchars($datasi['id']);
                $getproduct_details=$datasi['product_desc'];
                $brand=$datasi['brand'];
                ?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons">remove_circle</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                   
                                    <figure class="product-image h-auto">
                            <a href="product-details.php?id=<?php echo $getproduct_id; ?>">
                                        <img src="../product/<?php echo $datasi['f_newfile']; ?>" alt="" class="vm"> 
                            </a>
                                    </figure>
                                </div>
                                <div class="col px-0">
                                    <a href="product-details.php?id=<?php echo $getproduct_id; ?>" class="text-dark mb-1 h6 d-block"><?php echo ucwords($brand)." ".ucwords($product_name); ?> </a>
                                    <h5 class="text-success font-weight-normal mb-0">INR <?php echo $product_price; ?><sup>.00</sup></h5>
                                    <p class="text-secondary small text-mute mb-0"><?php  $position=200; 
                     $blogcontent = substr($getproduct_details, 0, $position);
                     echo strip_tags($blogcontent); echo "...";  ?></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">remove</i></button>
                                        </div>
                                        <input type="text" class="form-control w-35" placeholder="" value="<?php echo $product_qty; ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
<?php } } }?>
                        <!-- <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons">remove_circle</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/grapes2.png" alt="" class="vm"></figure>
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
                                        <input type="text" class="form-control w-35" placeholder="" value="1">
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
                                    <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons">remove_circle</i></button>
                                </div>
                                <div class="col-2 pl-0 align-self-center">
                                    <figure class="product-image h-auto"><img src="img/orange-2.png" alt="" class="vm"></figure>
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
                                        <input type="text" class="form-control w-35" placeholder="" value="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-light-grey px-1" type="button"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <span class="btn btn-success p-3 rounded-circle">
                                <i class="material-icons">local_activity</i>
                            </span>
                        </div>
                        <div class="col">
                            <div class="form-group mb-0 float-label active">
                                <input type="text" class="form-control" required="" value="ADU00548DOU">
                                <label class="form-control-label">Apply Coupon Code</label>
                            </div>
                        </div>
                        <div class="col-auto align-self-center">
                            <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">arrow_forward</i></button>
                        </div>
                    </div>
                </div>

                <div class="card-body border-top-dashed">
                    <div class="row ">
                        <div class="col-4">
                            <p class="text-secondary mb-1 small">Sub Total</p>
                            <h5 class="mb-0">$360.00</h5>
                        </div>
                        <div class="col-4 text-center">
                            <p class="text-secondary mb-1 small">Tax</p>
                            <h5 class="mb-0">$40.00</h5>
                        </div>
                        <div class="col-4 text-right">
                            <p class="text-secondary mb-1 small">Discount</p>
                            <h5 class="mb-0">-$100.00</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-4 border-0 shadow-sm border-top-dashed">
                <div class="card-body text-center">
                    <p class="text-secondary my-1">Net Payable</p>
                    <h3 class="mb-0">$400.00</h3>
                    <br>
                    <a href="checkout.html" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Checkout</span><i class="material-icons">arrow_forward</i></a>
                </div>
            </div>



        </div>
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="index.html" class="btn btn-link-default ">
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
                            <a href="profile.html" class="btn btn-link-default">
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


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 06:55:56 GMT -->
</html>
