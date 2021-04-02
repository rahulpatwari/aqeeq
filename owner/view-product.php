<?php include 'include/header.php';?>
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
 </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> View Product</h1>
        </div>
       <ul class="app-breadcrumb breadcrumb side">
          <button class="btn btn-primary btn-filter"><i class="fa fa-filter" aria-hidden="true"></i>  Advance Filter </button>
           &nbsp; &nbsp; <a  href="add-product.php" class="btn btn-primary"><i class="fa fa-filter" aria-hidden="true"></i>  Add Product </a>
        </ul>
      </div>
      <?php
      if (isset($_GET['del'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Deleted Successfully !
        </div>';
      }

      ?>
      <?php
      if (isset($_GET['update'])) {
        echo '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Product Updated Successfully !
        </div>';
      }

      ?>

       <div class="row filter" style="display: none;">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="" method=""> 
              <div class="row">
               <div class="col-md-3">
                <div class="form-group">
                  <label for="sel1">Filter By Date</label>
                    <input type="date" class="form-control" name="date">
                    <input type="date" class="form-control" name="from">               
                </div>
              </div>
              <div class="col-md-1">
                <button class="btn btn-primary" style="margin-top: 30px;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> 
              </form>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                 <label>Choose Categories Filter</label>
          <select class="form-control" onchange="javascript:location.href = this.value;">
             <option>Choose Categories</option>
              <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `cat`"); 
              while($datas = mysqli_fetch_array($sqls)){?>  
              <option value="view-product.php?cat=<?php echo $datas['cat']; ?>"><?php echo $datas['cat']; ?></option>
            <?php } ?>
          </select> 
                </div>
              </div>
              <div class="col-md-3">
                   <form action="view-product.php" method="GET">            
 <div class="slidecontainer">
  <label>Filter By Price Range</label>
  <input type="range" name="range" min="100" max="1000" value="100" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>
              </div>
              <div class="col-md-1">  
                <input type="submit" class="btn btn-primary" value="Filter" style="margin-top: 18px;">
              </form>
              </div>

              </div>
              </form>              
            </div>
          </div>
        </div> 
        </div>     



      <div class="row">
        <div class="col-md-12">
          <div class="tile table-responsive">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Product Name</th>
                    <th>Extra</th>
                    <th>Shipment</th>
                    <th>Offer Price</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                    <!-- <th>Edit</th> -->                    
                    <th>Action</th>
                    <th>Status</th>
                    <th>Slider</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              if (isset($_GET['cat'])) {
              $getcat=htmlspecialchars($_GET['cat']);  
              $sqls = mysqli_query($con,"Select * from `products` where cat = '$getcat'");               
              }
              elseif (isset($_GET['range'])) {
              $getrange=htmlspecialchars($_GET['range']);  
              $sqls = mysqli_query($con,"Select * from `products` WHERE Price BETWEEN 0 AND $getrange;");
              }
              elseif (isset($_GET['date'])) {
              $originalDate=htmlspecialchars($_GET['date']);  
              $newDate = date("d/m/Y", strtotime($originalDate));
              $sqls = mysqli_query($con,"Select * from `products` where date = '$newDate'");               
              }
              else{
              $sqls = mysqli_query($con,"Select * from `products`");                 
              }
              while($datas = mysqli_fetch_array($sqls)){ ?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['date']; ?></td>
                    <td><?php echo $datas['brand']; ?></td>
                    <td><?php echo $datas['cat']; ?></td>
                    <td><?php echo $datas['sub']; ?></td>
                    <td><?php echo $datas['product_name']; ?></td>
                    <td><?php echo $datas['extra']; ?></td>
                    <?php if($datas['shipment']=='0'){?>
                    <td>Free</td>
                    <?php }else{?>
                      <td>Chargeble</td>
                    <?php }?>
                    <td><?php echo $datas['offer']; ?>.00</td>
                    <td><?php echo $datas['price']; ?>.00</td>
                    <td><?php echo $datas['quantity']; ?></td>
                    <td><img src="../product/<?php echo $datas['f_newfile']; ?>" height= "100" width="100"></td>
                    <td><a href="edit-product.php?id=<?php echo $datas['id']; ?>" style="font-size:20px;"><img src="https://static.thenounproject.com/png/89031-200.png" style="width: 20px;height: 20px"></a><span style="font-size: 20px;">&nbsp;|&nbsp;</span>
                    <a href="controller/delete-product.php?id=<?php echo $datas['id']; ?>" style="font-size:20px;" onclick="return confirm('Are you sure you want to delete this product?');"><!-- <i class="fa fa-trash" aria-hidden="true"></i> --> <img src="https://image.flaticon.com/icons/png/512/61/61848.png"style="width: 20px;height: 20px"></a>


                    </td>                    
                    <!-- <td></td> -->
                    <td><a href="controller/status-update.php?status=<?php $status=$datas['status'];
                    if ($status=='active') {
                      echo 'unactive';
                    }
                    else{
                      echo'active';
                    }
                     ?>&id=<?php echo $datas['id']; ?>"> <?php $status=$datas['status'];
                    if ($status=='active') {
                      echo 'Inactive';
                    }
                    else{
                      echo'Active';
                    }
                     ?> </td>
                     <td><a href="slider-image.php?id=<?php echo $datas['id']; ?>" >Add</a></td>
                  </tr>
              <?php } ?>    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
 <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable(
       {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[ 1, "desc" ]],
                 "order": [[ 0, 'asc' ], [ 1, 'asc' ]],

        "pageLength": 10
    } 

  );</script>
      <script type="text/javascript">$('#sampleTable').DataTable();$('.dataTables_filter input').attr("placeholder", "Search By Keyword");</script>

   <script>
      $(document).ready(function(){
        $('.btn-filter').click(function(){
          $('.filter').slideToggle();
        });
      });
    </script>
    <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>