<?php include('include/header.php');?>
        <div class="container">
            <input type="text" class="form-control form-control-lg search my-3" placeholder="Search">

            <h6 class="subtitle">Categories</h6>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container small-slide">
                    <div class="swiper-wrapper">
                  <?php

              require_once('../owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `brand` order by serial_no +0 asc"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                            <a href="all-products.php?brand=<?php echo $datas_cat1['brand_name'];?>">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.php?brand=<?php echo $datas_cat1['brand_name'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php   $title_message=htmlspecialchars($datas_cat1['brand_name']);  
                       $positiont=40; // Define how many character you want to display.
                     $title_message=$datas_cat1['brand_name'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);

                  echo ucwords($head); ?> </a>
                                           <!--  <p class="text-secondary small">Oranges, Grapefruit, Mandarins</p> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    <?php }?>
                        <!-- <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Tropical </a>
                                            <p class="text-secondary small">Bananas, Mangoes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Berries</a>
                                            <p class="text-secondary small">Strawberries, Raspberries, Blueberries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Citrus </a>
                                            <p class="text-secondary small">Oranges, Grapefruit, Mandarins</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Tropical </a>
                                            <p class="text-secondary small">Bananas, Mangoes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Berries</a>
                                            <p class="text-secondary small">Strawberries, Raspberries, Blueberries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Citrus </a>
                                            <p class="text-secondary small">Oranges, Grapefruit, Mandarins</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       <!--  <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Tropical </a>
                                            <p class="text-secondary small">Bananas, Mangoes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                     <!--    <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/perfume-small.jpg" alt="" class="img-fluid">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">Berries</a>
                                            <p class="text-secondary small">Strawberries, Raspberries, Blueberries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <h6 class="subtitle">New Arrival<a href="all-products.html" class="float-right small">View All</a></h6>
            <div class="row">
                <?php

              require_once('../owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'New Arrival' and status='active' order by id desc limit 6"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>   

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class=""></figure>
                            <a href="product-details.php?id=<?php echo $datas_cat1['id'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($head);

                   ?> </a>
                           <!--  <p class="text-secondary small mb-2">Imported from Simla</p> -->
                            <h5 class="text-success font-weight-normal mb-0">INR <?php echo $datas_cat1['offer']?><sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">INR <del><?php echo $datas_cat1['price']?><sup>.00</sup></del></p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>

            <?php }?>
               <!--  <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Orange</a>
                            <p class="text-secondary small mb-2">Sweet and Juicy</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">50% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Lemon</a>
                            <p class="text-secondary small mb-2">Most Demanded</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Red Apple </a>
                            <p class="text-secondary small mb-2">Imported from Simla</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div> -->
            </div>
 <h6 class="subtitle">Hot Selling<a href="all-products.html" class="float-right small">View All</a></h6>
            <div class="row">
                    <?php

              require_once('../owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'Hot Selling' and status='active' order by id desc limit 6"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>   

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class=""></figure>
                            <a href="product-details.php?id=<?php echo $datas_cat1['id'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($head);

                   ?> </a>
                            <h5 class="text-success font-weight-normal mb-0">INR <?php echo $datas_cat1['offer']?><sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">INR <del><?php echo $datas_cat1['price']?><sup>.00</sup></del></p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            <?php }?>
               <!--  <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Orange</a>
                            <p class="text-secondary small mb-2">Sweet and Juicy</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">50% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Lemon</a>
                            <p class="text-secondary small mb-2">Most Demanded</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Red Apple </a>
                            <p class="text-secondary small mb-2">Imported from Simla</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div> -->
            </div>

             <h6 class="subtitle">Customers Choice<a href="all-products.html" class="float-right small">View All</a></h6>
            <div class="row">
                      <?php

              require_once('../owner/autho/data-autho.php');

              $sqls_cat1 = mysqli_query($con,"Select * from `products` where extra = 'Customers Choice' and status='active' order by id desc limit 6"); 

              while($datas_cat1 = mysqli_fetch_array($sqls_cat1)){ ?>   

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class=""></figure>
                            <a href="product-details.php?id=<?php echo $datas_cat1['id'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($head);

                   ?> </a>
                         
                            <h5 class="text-success font-weight-normal mb-0">INR <?php echo $datas_cat1['offer']?><sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">INR <del><?php echo $datas_cat1['price']?><sup>.00</sup></del></p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            <?php }?>
              <!--   <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Orange</a>
                            <p class="text-secondary small mb-2">Sweet and Juicy</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">50% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Lemon</a>
                            <p class="text-secondary small mb-2">Most Demanded</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Red Apple </a>
                            <p class="text-secondary small mb-2">Imported from Simla</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>
                            <a href="product-details.php" class="text-dark mb-1 mt-2 h6 d-block">Green Grapes</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- End of Top Container-->    
        </div>
        <!-- <div class="container-fluid bg-warning text-white my-3">
            <div class="row">
                <div class="container">
                    <div class="row  py-4 ">
                        <div class="col">
                            <h1 class="text-uppercase mb-3">20% OFF Season Sale</h1>
                            <p class="mb-3">Use Coupan Code<br><span class="text-dark">DFR0020</span></p>
                        </div>
                        <div class="col-5 col-md-3 col-lg-2 col-xl-2">
                            <img src="img/banana.png" alt="" class="mw-100 mt-3">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <p>Get the all new fresh bananas at very low price</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <h6 class="subtitle">Are you looking for:</h6>
            <div class="row">
                <div class="col">
                      <?php

              require_once('../owner/autho/data-autho.php');

              $usercats = mysqli_query($con,"Select * from sub where cat <> 'Home'");

                  while($udatcs = mysqli_fetch_array($usercats)){ ?>
                    <a href="all-products.php?sub=<?php echo $udatcs['sub'];?>" class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2"><?php echo $udatcs['sub'];?></a>
                <?php }?>
                   <!--  <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Water Perfume</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Bukhoor</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Body Lotion</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Body Cream</button> -->
                </div>
            </div>
            
            
        </div>
    <!--     <div class="container mb-3">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle mb-1">Most Exciting Feature</h5>
                    <p class="text-secondary">Take a look at our services</p>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">card_giftcard</i>
                            <h2>2546</h2>
                            <p class="text-secondary text-mute">Gift it out</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">subscriptions</i>
                            <h2>635</h2>
                            <p class="text-secondary text-mute">Monthly Billed</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">local_florist</i>
                            <h2>1542</h2>
                            <p class="text-secondary text-mute">Eco environment</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">location_city</i>
                            <h2>154</h2>
                            <p class="text-secondary text-mute">Four Offices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
       <?php include('include/footer.php');?>