<?php

$currency = '&#8377; '; //Currency Character or code



$db_username = 'ionxzmsa_aqeeq';

$db_password = 'arpit@123';

$db_name = 'ionxzmsa_aqeeq';

$db_host = 'localhost';

$sqls_ship = mysqli_query($con,"Select * from `shipping`"); 
while($datas_ship = mysqli_fetch_array($sqls_ship)){ 
$shipping_cost      = "0"; //shipping cost
$shipping_cost_get      = $datas_ship['ship_amount']; //shipping cost
}     




      require_once('owner/autho/data-autho.php');?>
                 <?php $data = mysqli_query($con,"Select * from `offer_amount`");
      while($row = mysqli_fetch_array($data)){
        $wallet_amount=$row['amount'];
      } 
 $reduce_amount =$wallet_amount;

$taxes              = array( //List your Taxes percent here.

                            /*'GST' => 18, */

                            );						

//connect to MySql						

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						

if ($mysqli->connect_error) {

    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);

}else{



}

?>