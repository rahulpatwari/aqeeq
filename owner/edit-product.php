<?php include 'include/header.php';?>
<script>
      $(document).ready(function(){
        $("#catclick").change(function(){
          var catclick = $("#catclick").val();
          $.post("controller/subcat.php",{
            catclick:catclick}
                 ,function(data){
            $("#resultcat").html(data);
          }
                );
        }
                               );
      }
                       );
</script> 
  <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
                <?php
      if (isset($_GET['succ'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Added Successfully !
        </div>';
      }

      ?>

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cart-arrow-down"></i> Edit Product</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active"><a href="#">Edit Product</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="tile">
            <div class="tile-body">
              <form action="controller/edit-product.php" method="POST" enctype="multipart/form-data">  
        
                  <div class="form-group">
            <label for="sel1">Select Category</label>
            <select class="form-control" id="catclick" name="cat" required="">
               <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
              <option><?php echo $datas['cat']; ?></option>
                <?php } ?>
              <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `cat`where cat='products'"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                 <option value="<?php echo $datas['cat']; ?>"><?php echo $datas['cat']; ?></option>
              <?php } ?>
            </select>
                </div>
 
                 
                  <div class="form-group">
            <label for="sel1">Select Sub Categories</label>
            <select class="form-control" id="resultcat" name="sub">
              <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
             <option value="<?php echo $datas['sub']; ?>"><?php echo $datas['sub']; ?></option>
              <?php } ?>
            </select>
                </div>
                <div class="form-group">
            <label for="sel1">Select Extra</label>
            <select class="form-control"name="extra">
             <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
              <option value="<?php echo $datas['extra']; ?>"><?php echo $datas['extra']; ?></option>
                <?php } ?>
              
                  <option value="New Arrival">New Arrival</option>
                 <option value="Hot Selling">Hot Selling</option>
                 <option value="Customers Choice">Customers Choice</option>
                 <option value="None">None</option>
          
            </select>
                </div>
                 <div class="form-group">
                  <label class="control-label">Product Name</label>
                  <input class="form-control" type="text" name="product_name" value="<?php echo $datas['product_name'];?>">
                </div>
                 
                  <div class="form-group">
            <label for="sel1">Product Brand</label>
            <select class="form-control"name="brand" required="">
               <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
              <option value="<?php echo $datas['brand']; ?>"><?php echo $datas['brand']; ?></option>
                <?php } ?>
              <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `brand`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                 <option value="<?php echo $datas['brand_name']; ?>"><?php echo $datas['brand_name']; ?></option>
              <?php } ?>
            </select>
                </div>


                  <div class="form-group">
            <label for="sel1">Gender</label>
            <select class="form-control"name="gender" required="">
               <?php
              require_once('autho/data-autho.php');
              $id=htmlspecialchars($_GET['id']);
              $sqls = mysqli_query($con,"Select * from `products` where id = '$id' "); 
              if($datas = mysqli_fetch_array($sqls)){ ?>
              <option value="<?php echo $datas['gender']; ?>"><?php echo $datas['gender']; ?></option>
                <?php } ?>
            
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
                 <option value="Unisex">Unisex</option>
              
            </select>
                </div>
                   <!-- <div class="form-group">
                  <label class="control-label">Product Brand</label>
                  <input class="form-control" type="text" name="brand" value="<?php echo $datas['brand'];?>"> -->
               <!--  </div> -->
                 <!-- <div class="form-group">
                  <label class="control-label">Gender</label>
                  <input class="form-control" type="text" name="gender" value="<?php echo $datas['gender'];?>">
                </div> -->
                
                <div class="form-group">
                  <label class="control-label">Add Product Details</label>
                  <textarea class="form-control" rows="7" data-gramm="true" data-txt_gramm_id="399d869a-7629-218d-e804-bc4803cbe6f5" name="product_desc" data-gramm_id="399d869a-7629-218d-e804-bc4803cbe6f5" spellcheck="false" data-gramm_editor="true" id="myTextarea"><?php echo $datas['product_desc'];?></textarea>
                </div>
  <div class="form-group">
                  <label class="control-label">Offer Price</label>
                 <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-inr"></i></span></div>
                        <input class="form-control" id="exampleInputAmount" name="offer" type="text" value="<?php echo $datas['offer'];?>">
                        
                      </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Price</label>
                 <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-inr"></i></span></div>
                        <input class="form-control" id="exampleInputAmount" name="price" type="text" value="<?php echo $datas['price'];?>">
                        
                      </div>
                </div>

              

                 <div class="form-group">
                  <label class="control-label">Quantity</label>
                 <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cart-plus"></i></span></div>
                        <input class="form-control" id="exampleInputAmount" name="quantity" type="number" placeholder="Enter Product Quantity" value="<?php echo $datas['quantity'];?>">
                        
                      </div>
                </div>


                 <div class="form-group">
                  <label class="control-label">Shipment</label>
                 <div class="input-group">
                        <input type="radio" name="shipment" value="0" <?php if($datas['shipment']=='0'){echo 'checked';}  ?> >&nbsp; Free &nbsp;
                        <input type="radio" name="shipment" value="1" <?php if($datas['shipment']=='1'){echo 'checked';}  ?>>&nbsp; Chargable
                        
                      </div>
                </div>


                <div>
                 <img src="../product/<?php echo $datas['f_newfile']; ?>" height= "100" width="100">
                </div>
                <div class="form-group">
                  <label class="control-label">Edit Product Images</label>
                  <input class="form-control" type="file" name="photo">
                </div>
            </div>

               <?php if(isset($_GET['id'])){
                      
                ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
              <?php }?>

            <div class="tile-footer">
              <button class="btn btn-primary" type="submit" name="upload_product"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
              <a class="btn btn-secondary" href="view-product.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
             </form>
          </div>
        </div>
      </div>
    <?php }?>
    </main>
<script src='tinymce/tinymce.min.js'></script>
    <script>
    tinymce.init({
        selector: '#myTextarea',
        height: 320,
        theme: 'modern',
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    </script>
<?php include 'include/footer.php';?>

