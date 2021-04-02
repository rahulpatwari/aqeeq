<?php
if (isset($_GET['id'])) {
$id=htmlspecialchars($_GET['id']);
$order_id=htmlspecialchars($_GET['order_id']);
require_once('../autho/data-autho.php');	
$sql = "DELETE FROM orders where id ='$id' ";
if (mysqli_query($con, $sql)) {
    header('Location:../edit-invoice.php?id='.$order_id.'&del');
}
else{
    header('Location:..edit-invoice.php?id='.$order_id.'&delerror');
}	
}
else{
	echo "You Don't Have Authorization To Access This Page";
}