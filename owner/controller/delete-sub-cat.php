<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
$cat=$_GET['cat'];
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM sub where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../subcat.php?cat='.$cat.'&del');
}
else{
    header('Location:../subcat.php?delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}