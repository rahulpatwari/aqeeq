<?php include('include/header.php');?>
        <div class="container">
            <input type="text" class="form-control form-control-lg search my-3" placeholder="Search">

            <div class="subtitle h6">
                 <?php 
                 if (htmlspecialchars($_GET['brand'])) {
                    
             
              require_once('../owner/autho/data-autho.php');
              $brand=htmlspecialchars($_GET['brand']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where brand = '$brand' and status='active'");
               $count=mysqli_num_rows($sqls_fimage);
              ?>
                <div class="d-inline-block">
                    All <?php echo $brand ;?> Brand<br>
                    <p class="small text-mute"><?php echo $count;?> products</p>
                </div>
               <!--  <div class="float-right">
                    <div class="btn-group filter-group" role="group" aria-label="Basic example">
                        <a href="all-products.php" class="btn btn-light active"><i class="material-icons">view_module</i></a>
                        <a href="all-products-list.html" class="btn btn-light"><i class="material-icons">view_list</i></a>
                    </div>
                </div> -->
            </div>
            <div class="row">


            <?php
              require_once('../owner/autho/data-autho.php');
              $brand=htmlspecialchars($_GET['brand']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where brand = '$brand'"); 
              while($datas_cat1 = mysqli_fetch_array($sqls_fimage)){ ?>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
<a href="product-details.php?id=<?php echo $datas_cat1['id'];?>">
                            <figure class="product-image"><img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class=""></figure>
</a>
                            <a href="product-details.php?id=<?php echo $datas_cat1['id'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($head);

                   ?></a>
                           <h5 class="text-success font-weight-normal mb-0">INR <?php echo $datas_cat1['offer']?><sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">INR <del><?php echo $datas_cat1['price']?><sup>.00</sup></del></p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>

            <?php }  } 


        elseif (htmlspecialchars($_GET['sub'])) {
             require_once('../owner/autho/data-autho.php');
              $sub=htmlspecialchars($_GET['sub']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where sub = '$sub' and status='active'");
               $count=mysqli_num_rows($sqls_fimage);
              ?>
                <div class="d-inline-block">
                    All <?php echo $sub ;?><br>
                    <p class="small text-mute"><?php echo $count;?> products</p>
                </div>
               <!--  <div class="float-right">
                    <div class="btn-group filter-group" role="group" aria-label="Basic example">
                        <a href="all-products.php" class="btn btn-light active"><i class="material-icons">view_module</i></a>
                        <a href="all-products-list.html" class="btn btn-light"><i class="material-icons">view_list</i></a>
                    </div>
                </div> -->
            </div>
            <div class="row">

      <?php if($count){?>
            <?php
              require_once('../owner/autho/data-autho.php');
              $sub=htmlspecialchars($_GET['sub']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where sub = '$sub'"); 
              while($datas_cat1 = mysqli_fetch_array($sqls_fimage)){ ?>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>
<a href="product-details.php?id=<?php echo $datas_cat1['id'];?>">
                            <figure class="product-image"><img src="../product/<?php echo $datas_cat1['f_newfile']; ?>" alt="" class=""></figure>
</a>
                            <a href="product-details.php?id=<?php echo $datas_cat1['id'];?>" class="text-dark mb-1 mt-2 h6 d-block"><?php 
                     
                   $title_message=htmlspecialchars($datas_cat1['product_name']);  
                       $positiont=15; // Define how many character you want to display.
                     $title_message=$datas_cat1['product_name'];
                     $brandget=$datas_cat1['brand'];
                     $titlecontent = substr($title_message, 0, $positiont);
                    $head=strip_tags($titlecontent);


                  echo "$brandget "; echo ucwords($head);

                   ?></a>
                           <h5 class="text-success font-weight-normal mb-0">INR <?php echo $datas_cat1['offer']?><sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">INR <del><?php echo $datas_cat1['price']?><sup>.00</sup></del></p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>

            <?php }
        }
        else{
    echo "No Product....";
}


}






            ?>
             <!--    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">10% off</div>

                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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
                            <div class="badge badge-success float-right mt-1">50% off</div>

                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud </a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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
                            <div class="badge badge-success float-right mt-1">10% off</div>

                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud </a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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
                            <div class="badge badge-success float-right mt-1">50% off</div>

                            <figure class="product-image"><img src="img/perfume.jpg" alt="" class=""></figure>

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud </a>
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

                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">(Otoori) Black Oud</a>
                            <p class="text-secondary small mb-2">Chilled fresh</p>
                            <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup></h5>
                            <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div> -->
            </div>
           <!--  <div class="row">
                <div class="col-12 text-center">
                    <div class="btn btn-default btn-rounded mb-3">
                        <div class="btn-loader"><div></div><div></div><div></div><div></div></div>
                        <h6 class="d-inline-block text-left mx-2 mb-0 text-normal">Loading Content<br><small class="text-mute">Please wait for a while...</small></h6>
                    </div>
                </div>
            </div> -->
        </div>
       
    </div>
    <div class="filter">
        <button class="btn btn-default filter-btn shadow"><i class="material-icons">filter_list</i></button>
        <div class="container filters-container">
            <div class="subtitle h6">
                <div class="d-inline-block">
                    Filter Criteria<br>
                    <p class="small text-mute">2154 products</p>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="form-control-lable">
                    Select Price Range
                </label>
                <br>
                <div id="rangeslider" class="mt-2"></div>
            </div>
            <div class="form-group float-label pt-0">
                <div class="row">
                    <div class="col">
                        <input type="number" min="0" max="500" value="100" step="1" id="input-select" class="form-control">
                    </div>
                    <div class="col-auto pt-2"> to </div>
                    <div class="col">
                        <input type="number" min="0" max="500" value="100" step="1" id="input-number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group float-label active">
                <select class="form-control chosen" multiple>
                    <optgroup label="Citrus">
                        <option>(Otoori) Black Oud</option>
                        <option>Grapefruit</option>
                        <option>Mandarin</option>
                    </optgroup>
                    <optgroup label="Tropical">
                        <option>Bananas</option>
                        <option>Mangoes</option>
                    </optgroup>
                    <optgroup label="Barries">
                        <option>Strawberries</option>
                        <option>Raspberries</option>
                        <option>Blueberries</option>
                    </optgroup>
                </select>
                <label class="form-control-label">Select Fruite</label>
            </div>
            <div class="form-group float-label">
                <input type="text" class="form-control">
                <label class="form-control-label">Keyword</label>
            </div>

            <div class="form-group float-label active">
                <select class="form-control chosen">
                    <option>10% </option>
                    <option>30%</option>
                    <option>50%</option>
                    <option>80%</option>
                </select>
                <label class="form-control-label">Offer Discount</label>
            </div>

            <br>
            <button class="btn btn-light btn-rounded btn-block">Search</button>
            <br>

        </div>
    </div>
<?php include('include/footer.php');?>
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.small-slide', {
                slidesPerView: 'auto',
                spaceBetween: 0,
            });

            var swiper = new Swiper('.news-slide', {
                slidesPerView: 5,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    }
                }
            });
            
            /* range picker for filter */
            var html5Slider = document.getElementById('rangeslider');
            noUiSlider.create(html5Slider, {
                start: [0, 100],
                connect: true,
                range: {
                    'min': 0,
                    'max': 500
                }
            });

            var inputNumber = document.getElementById('input-number');
            var select = document.getElementById('input-select');

            html5Slider.noUiSlider.on('update', function(values, handle) {
                var value = values[handle];

                if (handle) {
                    inputNumber.value = value;
                } else {
                    select.value = Math.round(value);
                }
            });
            select.addEventListener('change', function() {
                html5Slider.noUiSlider.set([this.value, null]);
            });
            inputNumber.addEventListener('change', function() {
                html5Slider.noUiSlider.set([null, this.value]);
            });

            /* chosen select*/
            $(".chosen").chosen();
        });

    </script>

</body>

</html>
