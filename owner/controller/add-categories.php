<?php
if (isset($_POST['add_cat'])) {	
#insert data categories here
require_once('../autho/data-autho.php');
require_once('../autho/session.php');
$cat=htmlspecialchars($_POST['cat']);
$check = "SELECT * FROM `cat` WHERE cat = '$cat'";
        $result   = mysqli_query($con, $check);
         $rowcount = mysqli_num_rows($result);
         if ($rowcount==0) {
         #query run here
 	$sql = "INSERT INTO `cat`(`cat`,`date`,`time`) VALUES('" . $cat . "','" . $date . "','" . $time . "')";
      if (mysqli_query($con, $sql)) {
      	header('Location:../add-categories.php?succ');
      }
      else{
      	header('Location:../add-categories.php?err');
      }
 }
 else{
      	header('Location:../add-categories.php?already');
 }
}
else{
	echo"You Don't Have Authorization To Access This Page";
}