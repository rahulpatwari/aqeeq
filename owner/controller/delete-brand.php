<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM brand where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../add-brand.php?del');
}
else{
    header('Location:../add-brand.php?delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}