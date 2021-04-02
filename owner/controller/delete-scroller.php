<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM scroller where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../topprouct.php?del');
}
else{
    header('Location:../topprouct.php?err');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}