<?php
if (isset($_POST['add_cat'])) {	
#insert data categories here
require_once('../autho/data-autho.php');
require_once('../autho/session.php');
$cat=htmlspecialchars($_POST['cat']);
$sub_cat=htmlspecialchars($_POST['sub_cat']);
$check = "SELECT * FROM `sub` WHERE cat = '$cat' and subcat = '$sub_cat'";
        $result   = mysqli_query($con, $check);
         $rowcount = mysqli_num_rows($result);
         if ($rowcount==0) {
         #query run here
 	echo $sql = "INSERT INTO `sub`(`id`,`cat`, `sub`, `date`, `time`) VALUES(null,'" . $cat . "','" . $sub_cat . "','" . $date . "','" . $time . "')";
      if (mysqli_query($con, $sql)) {
      	header('Location:../subcat.php?cat='.$cat.'&succ');
      }
      else{
      	header('Location:../subcat.php?err');
      }
 }
 else{
      	header('Location:../subcat.php?already');
 }
}
else{
	echo"You Don't Have Authorization To Access This Page";
}