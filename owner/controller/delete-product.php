<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM `products` where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../view-product.php?del');
}
else{
    header('Location:../view-product.php?delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}