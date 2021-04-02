<?php
if (isset($_POST['add_brand'])) {	
#insert data categories here
require_once('../autho/data-autho.php');
require_once('../autho/session.php');
$brand=htmlspecialchars($_POST['brand']);
$date=date('d/m/Y');
$f_name      = $_FILES['myfile']['name'];
        $f_tmp       = $_FILES['myfile']['tmp_name'];
        $f_size      = $_FILES['myfile']['size'];
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../product/" . $f_newfile;
        if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' || $f_extension == 'gif') {
            if ($f_size >= 1000000) {
                echo "max size is 10 mb";
            } else {
                if (move_uploaded_file($f_tmp, $store)) {
                    echo "uploaded";
                }
            }
        }
date_default_timezone_set('Asia/Kolkata');
  $time=date( 'H:i:s', time ());
$sql="SELECT * FROM brand ";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$getcount=$count+1;

$check = "SELECT * FROM `brand` WHERE brand_name = '$brand'";
        $result   = mysqli_query($con, $check);
         $rowcount = mysqli_num_rows($result);
         if ($rowcount==0) {
         #query run here
 	$sql = "INSERT INTO `brand`(`id`,`brand_name`,`date`,`time`,`f_newfile`,`serial_no`) VALUES(NULL,'" . $brand . "','" . $date . "','" . $time . "','".$f_newfile."','".$getcount."')";
      if (mysqli_query($con, $sql)) {
      	header('Location:../add-brand.php?succ');
      }
      else{
      	header('Location:../add-brand.php?err');
      }
 }
 else{
      	header('Location:../add-brand.php?already');
 }
}
else{
	echo"You Don't Have Authorization To Access This Page";
}