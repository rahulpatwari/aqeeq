<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM `homeproduct` where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../view-home-product.php?del');
}
else{
    header('Location:../view-home-product.php?delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}