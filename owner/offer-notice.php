<?php include 'include/header.php';?>

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-free-code-camp"></i> Add Offer Notice</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php if(isset($_GET['succ'])){?>
          <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong> New Offer Publish Successfully .
</div>
<?php } ?>
          <div class="tile">
            <div class="tile-body">
              <h3 class="text-center">Publish Offer Notice</h3>

                      <?php
              require_once('autho/data-autho.php');
              $sqls = mysqli_query($con,"Select * from `offer_notice`"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>
              <form action="controller/offer-notice.php" method="POST">
                <div class="form-group">
                  <label class="control-label">Offer Title</label>
                  <input class="form-control" type="text" name="title" placeholder="Enter Offer Title" required="" value="<?php echo $datas['title']; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Offer Url</label>
                  <input class="form-control" type="url" name="url" placeholder="Enter Offer Url" required="" value="<?php echo $datas['url']; ?>">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="submit">Publish</button>
                </div>
              </form>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include 'include/footer.php';?>

