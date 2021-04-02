<?php
if (isset($_POST['submit'])) {
	require_once('../autho/data-autho.php');
	$title=htmlspecialchars($_POST['title']);
	$status="active";
	$check = "SELECT * FROM `deliver_status` WHERE title = '$title'";
        $result   = mysqli_query($con, $check);
         $rowcount = mysqli_num_rows($result);
         if ($rowcount==0) {
         #query run here
 		$sql = "INSERT INTO `deliver_status`(`id`, `title`, `status`) VALUES(null,'" . $title . "','" . $status . "')";
      if (mysqli_query($con, $sql)) {
      	header('Location:../add-status.php?succ');
      }
      else{
      	header('Location:../add-status.php?err');
      }
 }
 else{
      	header('Location:../add-status.php?already');
 }
}
else{
	echo"You Don't Have Authorization To Access This Page";
}