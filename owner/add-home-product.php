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

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cart-arrow-down"></i> Add Product</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active"><a href="#">Add Product</a></li>
        </ul>
      </div>
      <?php
      if (isset($_GET['succ'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Added Successfully !
        </div>';
      }

      ?>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="tile">
            <div class="tile-body">
              <form action="controller/add-home-product.php" method="POST" enctype="multipart/form-data">  
                <div class="form-group">
                  <div class="form-group">
            <label for="sel1">Select Category</label>
            <select class="form-control" id="catclick" name="cat">
              <option>Choose Categories</option>
              <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `cat`"); 
              while($datas = mysqli_fetch_array($sqls)){?>
                 <option><?php echo $datas['cat']; ?></option>
              <?php } ?>
            </select>
                </div>

                   <div class="form-group">
                  <div class="form-group">
            <label for="sel1">Select Sub Categories</label>
            <select class="form-control" id="resultcat" name="sub">
             
            </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Product Code</label>
                  <input class="form-control" type="text" name="product_code" placeholder="Product Code" value="<?php echo uniqid(); ?>">
                </div>
               
                 <div class="form-group">
                  <label class="control-label">Product Name</label>
                  <input class="form-control" type="text" name="product_name" placeholder="Product name">
                </div>
                 
                 
                
                <div class="form-group">
                  <label class="control-label">Add Product Details</label>
                  <textarea class="form-control" rows="7" placeholder="Pant Details" data-gramm="true" data-txt_gramm_id="399d869a-7629-218d-e804-bc4803cbe6f5" name="product_desc" data-gramm_id="399d869a-7629-218d-e804-bc4803cbe6f5" spellcheck="false" data-gramm_editor="true" id="myTextarea"></textarea>
                </div>

                <div class="form-group">
                  <label class="control-label">Product Price</label>
                 <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-inr"></i></span></div>
                        <input class="form-control" id="exampleInputAmount" name="price" type="text" placeholder="Product Amount">
                        
                      </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Offer Price</label>
                 <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-inr"></i></span></div>
                        <input class="form-control" id="exampleInputAmount" name="offer" type="text" placeholder="Offer Amount">
                        
                      </div>
                </div>
               
                <div class="form-group">
                  <label class="control-label">Upload Product Images</label>
                  <input class="form-control" type="file" name="myfile">
                </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit" name="upload_product"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
              <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
             </form>
          </div>
        </div>
      </div>
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

