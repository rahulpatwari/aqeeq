<?php
if (isset($_GET['id'])) {
	echo $id=htmlspecialchars($_GET['id']);
	echo $status=htmlspecialchars($_GET['status']);
	require_once('../autho/data-autho.php');
	$update = "UPDATE `access` SET status = '$status' WHERE id='$id'";
      if (mysqli_query($con, $update)) {
      	header('Location:../vendors-view.php?update');
      }
      else{
      	header('Location:../vendors-view.php?err');
      }
}
else{
	echo 'You Dont Have Authorizaton To Access This Page';
}