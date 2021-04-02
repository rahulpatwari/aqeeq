<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM slider_image where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../slider-image.php?id='.$id.'&del');
}
else{
    header('Location:../slider-image.php?err');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}