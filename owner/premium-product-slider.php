<?php include 'include/header.php';?>

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-sliders"></i> Home Premium Slider</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php if(isset($_GET['succ'])){?>
          <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong> New Slider Added Successfully .
</div>
<?php } ?>

 <?php if(isset($_GET['del'])){?>
          <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Deleted !</strong> Product Deleted Successfully  .
</div>
<?php } ?>
          <div class="tile">
            <div class="tile-body">
              <h3 class="text-center">Home Premium Slider</h3>

              <form action="controller/premium-slider.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Offer Title</label>
                  <textarea class="form-control" name="title" required="" style="height: 120px;"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Offer Url</label>
                  <input class="form-control" type="url" name="url" placeholder="Enter Offer Url" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Product Image</label>
                  <input class="form-control" type="file" name="myfile" placeholder="Enter Product Image" required="">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="submit">Add Slider</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `featured_slider`  order by id desc "); 
              while($datas = mysqli_fetch_array($sqls)){ ?>
                  <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><?php echo $datas['date']; ?></td>
                    <td><img src="../premslider/<?php echo $datas['image']; ?>" height="100" width="100"> </td>
                    <td><?php echo $datas['title']; ?></td>
                    <td><a href="<?php echo $datas['url']; ?>">
                    View Url </a></td>
                    <td><a href="controller/fslider-del.php?id=<?php echo $datas['id']; ?>" class="btn btn-primary"> <i class="fa fa-share" aria-hidden="true"></i>
                    Delete</a></td>
                  </tr>
              <?php } ?>    
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include 'include/footer.php';?>

