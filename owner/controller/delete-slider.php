<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM slider where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../add-slider.php?del');
}
else{
    header('Location:../add-slider.php?err');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}