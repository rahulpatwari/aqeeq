<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM featured_slider where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../premium-product-slider.php?del');
}
else{
    header('Location:../premium-product-slider.php?server');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}