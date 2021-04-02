<?php include('include/header.php');?>

        <div class="container">

            <!-- Swiper -->
            <div class="swiper-container product-details">
                <div class="swiper-wrapper">

            <?php
              require_once('../owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sqls_fimage = mysqli_query($con,"Select * from `products` where id = '$get_id'"); 
              while($datas_fimg = mysqli_fetch_array($sqls_fimage)){ ?>
                    <div class="swiper-slide">
                        <img src="../product/<?php echo htmlspecialchars($datas_fimg['f_newfile']); ?>" alt="Los Angeles">
        
      </div>
  <?php } ?>
  <?php
              require_once('../owner/autho/data-autho.php');
              $get_id=htmlspecialchars($_GET['id']);
              $sqls_simage = mysqli_query($con,"Select * from `slider_image` where product_id= '$get_id'"); 
              while($datas_simg = mysqli_fetch_array($sqls_simage)){ ?>
                    <div class="swiper-slide">
                        <img src="../slider_image/<?php echo htmlspecialchars($datas_simg['image'])?>">
                        
      </div>
    <?php } ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>


            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-rounded ml-2" data-toggle="modal" data-target="#share"><i class="material-icons mb-18 mr-2">share</i>Share</a>
<!--             <div class="badge badge-success float-right mt-1">10% off</div>
 -->
            <p class="text-secondary my-3 small">
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <span class="text-dark vm ml-2">Rating 4.2</span> <span class="vm">based on 245 reviews</span>
            </p>


<?php
  require_once('../owner/autho/data-autho.php');

if (isset($_GET['id'])) {

    $id=$_GET['id'];

$results =mysqli_query($con,"SELECT * from products where id='$id' and status='active' order by id desc ");

}elseif(isset($_GET['search'])){

    $search=$_GET['search'];

    $results =mysqli_query($con,"SELECT * from products where product_name like '%$search%' and status='active' order by id desc");



}else  {

$results =mysqli_query($con,"SELECT * from products where status='active' order by id desc ");

}

if($results){ 




//fetch results set as object and output HTML

while($obj = mysqli_fetch_array($results))

{
 
    ?>
            <a href="#" class="text-dark mb-1 mt-2 h6 d-block"><?php echo $obj['brand']." ".$obj['product_name'];?>
             <!--    <span class="small float-right badge bg-warning">
                    <i class="material-icons h5 mb-0">timer</i>
                    <span id="timer" class="vm">
                        <span id="days"></span><small>d</small>
                        <span id="hrs"></span><small>h</small>
                        <span id="min"></span><small>m</small>
                        <span id="sec"></span><small>s</small>
                    </span>
                </span> -->

            </a>
         <!--    <p class="text-secondary small mb-2">Imported from Simla</p>
 -->
            <p class="text-secondary"><?php echo $obj['product_desc'];?></p>
            <div class="row mb-4">
                <div class="col">
                    <h3 class="text-success font-weight-normal mb-0">INR <?php echo $obj['offer']?><sup>.00</sup></h3>
                    <p class="text-secondary text-mute mb-0">INR <del><?php echo $obj['price']?><sup>.00</sup></del></p>
                </div>
                <form action="cart_update.php" method="POST"> 
                <div class="col-auto align-self-center">
                    <input type="hidden" name="product_code" value="<?php echo $obj['product_code']?>" />
                      <input type="hidden" name="type" value="add" />
                      <input type="hidden" name="product_qty" value="1" />
                    <input type="submit" class="btn btn-lg btn-default shadow btn-rounded" value="Add To Cart">
                </div>
                </form>
            </div>



<?php } }?>
<h6 class="subtitle">User Comment</h6>
    <?php
                            require_once('../owner/autho/data-autho.php');
                            $msg_id=htmlspecialchars($_GET['id']);
                            $userreview = mysqli_query($con,"Select * from review where msg_id ='$msg_id'");
                            while($ureview = mysqli_fetch_array($userreview)){

                            ?>
            
            <div class="row bg-white py-3">
                <div class="col-6 mb-3">
                    <p>
                        <i class="material-icons text-warning md-18 vm">star</i>
                        <i class="material-icons text-warning md-18 vm">star</i>
                        <i class="material-icons text-warning md-18 vm">star</i>
                        <i class="material-icons text-secondary md-18 vm">star</i>
                        <i class="material-icons text-secondary md-18 vm">star</i>
                    </p>
                </div>
                <div class="col-6 mb-3 text-right">
                    <p class="text-muted small"><?php echo htmlspecialchars(ucwords($ureview['date'])); ?></p>
                </div>
                <div class="col-auto align-self-start">
                    <figure class="avatar avatar-50">
                        <img src="img/user1.png" alt="">
                    </figure>
                </div>
                <div class="col">
                    <h6><?php echo htmlspecialchars(ucwords($ureview['name'])); ?></h6>
                    <p class="text-secondary small"><?php echo htmlspecialchars($ureview['review_msg']); ?></p>
                </div>
            </div>
            <br>

  <?php } ?>

   <form action="../controller/add-review.php" method="POST"> 
            <h6 class="subtitle">Add Comment</h6>
            <p class="text-center">
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
            </p>

            <div class="form-group float-label active">
                <input type="text" class="form-control" name="name" required="">
                <label class="form-control-label">Name</label>
            </div>
            <div class="form-group float-label active">
                <input type="email" class="form-control" name="email" required="">
                <label class="form-control-label">Email address</label>
            </div>
            <div class="form-group float-label">
                <textarea class="form-control" name="review_msg" required=""></textarea>
                <label class="form-control-label">Type your comment...</label>
            </div>
         
            <input type="hidden" name="page_id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
            <input type="hidden" name="app_page" value="app">
             <input type="submit" name="submit" class="btn btn-lg btn-default btn-rounded shadow" value="Comment">
            <!-- <a href="#" class="btn btn-lg btn-default btn-rounded shadow"><span>Comment</span><i class="material-icons">arrow_forward</i></a> -->
            
            </form>


            <br>
            <br>

        </div>
       

    <!-- Modal -->
    <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-end" role="document">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <h6 class="subtitle mt-0">Share with</h6>
                    <div class="row">
                        <div class="col-12">
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="img/facebook.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="img/whatsapp.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="img/linkdedin.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="img/twitter.png" alt="">
                            </figure>
                        </div>
                    </div>

                    <p class="subtitle text-secondary">Recent Connected</p>
                    <div class="row">
                        <div class="col-12">
                            <figure class="avatar avatar-50">
                                <img src="img/user1.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50">
                                <img src="img/user2.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50">
                                <img src="img/user3.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50">
                                <img src="img/user4.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50">
                                <img src="img/user2.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('include/footer.php');?>
   
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.product-details ', {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination'
                }
            });



            /* counter count down script */
            var countDownDate = new Date("December 20, 2019 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("days").innerHTML = days;
                document.getElementById("hrs").innerHTML = hours
                document.getElementById("min").innerHTML = minutes
                document.getElementById("sec").innerHTML = seconds

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("timer").innerHTML = "EXPIRED";
                }
            }, 1000);

        });

    </script>
