<?php
if (isset($_GET['id'])) {
	echo $id=htmlspecialchars($_GET['id']);
	echo $status=htmlspecialchars($_GET['status']);
	require_once('../autho/data-autho.php');
	$update = "UPDATE `products` SET status = '$status' WHERE id='$id'";
      if (mysqli_query($con, $update)) {
      	header('Location:../view-product.php?update');
      }
      else{
      	header('Location:../view-product.php?err');
      }
}
else{
	echo 'You Dont Have Authorizaton To Access This Page';
}