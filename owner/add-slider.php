<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-picture-o" aria-hidden="true"></i> Add Images</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Add Images</a></li>
        </ul>
      </div>        
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
              <!-- Start Form Here -->
                  <form action="controller/add-slider.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Upload Your Images Here (1900X400)</label>
                    <script>
                    var loadFile = function(event) {
                      var reader = new FileReader();
                      reader.onload = function(){
                        var output = document.getElementById('output');
                        output.src = reader.result;
                      };
                      reader.readAsDataURL(event.target.files[0]);
                    };
                  </script>
                    <br><center><img id="output" height="200" width="200" alt="Image Preview Here"/></center> 
                    <input class="form-control" id="imgInp" type="file" name="myfile" aria-describedby="emailHelp" placeholder="Enter email" accept="image/*" onchange="loadFile(event)">
                     
                    <br><center><p>Enter Slider URL Link </p></center> 
                    <input class="form-control" type="text"placeholder="ex.https://aqeeqtrading.com/products.php" name="link">


                  </div>
                  <button type="submit" name="upload_img" class="btn btn-primary btn-block">Upload Images</button>
                  </form>
              <!-- End Form Here -->
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div>
            <a href="manage-slider/"class="btn btn-primary" style="float: right;">Manage</a>
            </div>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Slider Image</th>
                    <th>Generate Url Link</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
              require_once('autho/data-autho.php');
              $s_no=1;
              $sqls = mysqli_query($con,"Select * from `slider` order by id desc"); 
              while($datas = mysqli_fetch_array($sqls)){ ?>       
                   <tr>
                    <td><?php echo $s_no++; ?></td>
                    <td><img src="../slider/<?php echo $datas['f_newfile']; ?>" height="100" width="100"></td>
                    <td><?php echo $datas['link']; ?></td>
                    <td><a href="edit-link.php?id=<?php echo $datas['id']; ?>">Edit</a> | <a href="controller/delete-slider.php?id=<?php echo $datas['id']; ?>">Delete</a></td>
                  </tr>
                <?php } ?>  
                </tbody>
              </table>
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
  </body>
</html>