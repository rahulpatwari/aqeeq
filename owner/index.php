<?php include 'include/header.php';
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon">
            <span class="icon ti-user fa-3x" style="color: #fff;"></span>

            <div class="info">
              <h4>Users</h4>
              <p><b><?php
require_once('autho/data-autho.php');
$sql_user="SELECT * FROM user";
$result_user=mysqli_query($con,$sql_user);
$row_user=mysqli_fetch_array($result_user,MYSQLI_ASSOC);
echo $count_user=mysqli_num_rows($result_user);
?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><span class="icon ti-thumb-up fa-3x"></span>
            <div class="info">
              <h4>Today Orders</h4>
              <p><b><?php
require_once('autho/data-autho.php');
$getdate=date('d/m/Y');
$sql_order="SELECT * FROM orders where `date` = '$getdate'";
$result_order=mysqli_query($con,$sql_order);
$row_order=mysqli_fetch_array($result_order,MYSQLI_ASSOC);
echo $count_order=mysqli_num_rows($result_order);
?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><span class="icon ti-upload fa-3x"></span>
            <div class="info">
              <h4>Montly Orders</h4>
              <p><b><?php
require_once('autho/data-autho.php');
$getdate=date('F');
$sql_ordermonthly="SELECT * FROM orders where `month` = '$month'";
$result_ordermonthly=mysqli_query($con,$sql_ordermonthly);
$row_ordermonthly=mysqli_fetch_array($result_ordermonthly,MYSQLI_ASSOC);
echo $count_ordermonthly=mysqli_num_rows($result_ordermonthly);
?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><span class="icon ti-star fa-3x"></span>
            <div class="info">
              <h4>Active Products</h4>
              <p><b><?php
require_once('autho/data-autho.php');
$sql_product="SELECT * FROM products where status = 'active'";
$result_product=mysqli_query($con,$sql_product);
$row_product=mysqli_fetch_array($result_product,MYSQLI_ASSOC);
echo $count_product=mysqli_num_rows($result_product);
?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title text-center">Monthly Sales   <span>
            <select onchange="javascript:location.href = this.value;">
              <option value="index.php?year=2019">Choose Year</option>
       <option value="index.php?year=2019">2019</option>
           <!-- <option value="index.php?year=2020">2020</option>
            <option value="index.php?year=2021">2021</option>
            <option value="index.php?year=2022">2022</option> -->
          </select>
  </span></h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile" style="  overflow-y: scroll;height: 407px;">
            <h3 class="tile-title text-center">Today's Order</h3>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Order No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once('autho/data-autho.php');
                $s_no=1;
                $date=date('d/m/Y');
                $sqls = mysqli_query($con,"Select * from `orders` where date = '$date' order by date desc ");
                while($datas = mysqli_fetch_array($sqls)){ 
                $getuser_id=htmlspecialchars($datas['user_id']);  
                  ?>
                <tr class="table-info">
                  <td><?php echo $s_no++; ?></td>
                  <td><?php echo $datas['id']; ?></td>
                  <td><?php 
                    require_once('autho/data-autho.php');
                    $sqlsu = mysqli_query($con,"Select * from `user` where user_id = '$getuser_id' "); 
              while($datasu = mysqli_fetch_array($sqlsu)){?>
                    <?php echo ucwords($datasu['name']); ?>
              <?php } ?></td>
                  <td>
                    <a href="invoice.php?id=<?php echo $datas['order_id']; ?>" class="btn btn-warning">View</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  
<?php include 'include/footer.php';?>
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
      <?php if(isset($_GET['year']))  
              {?>
             
<script type="text/javascript">
       var data = {
        labels: ["2019"],
        datasets: [
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>

     <?php
      }
      else{  ?>

    <script type="text/javascript">
       var data = {
        labels: [<?php 
     require_once('autho/data-autho.php');
     $order_list = mysqli_query($con,"Select * from `orders` Group By month order by id asc ");
    while($order = mysqli_fetch_array($order_list)){
    ?>"<?php echo $get_invoice_month=htmlspecialchars($order['month']); ?>",<?php } ?>],
        datasets: [
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [<?php 
     require_once('autho/data-autho.php');
     $order_list = mysqli_query($con,"Select * from `orders` Group By month order by id asc ");
    while($order = mysqli_fetch_array($order_list)){
    $get_order_month=htmlspecialchars($order['month']);  
    $sql_month="SELECT * FROM orders WHERE month='$get_order_month'";
    $result_month=mysqli_query($con,$sql_month);
    $row_month=mysqli_fetch_array($result_month,MYSQLI_ASSOC);
    echo $count_month=mysqli_num_rows($result_month);echo ',';
    }?>]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <?php
    }
    ?>
  </body>
</html>