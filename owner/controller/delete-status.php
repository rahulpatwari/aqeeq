<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM `deliver_status` where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../add-status.php?del');
}
else{
    header('Location:../add-status.php?delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}