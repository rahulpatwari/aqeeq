<?php
if (isset($_POST['submit'])) {
require_once('../autho/data-autho.php');
$title=mysqli_real_escape_string($con,$_POST['title']); 
$url=mysqli_real_escape_string($con,$_POST['url']);
$date=date('d/m/Y');
 $update = "UPDATE `offer_notice` SET `date` = '$date', title = '$title', url = '$url' WHERE id='1'";
if (mysqli_query($con, $update)) {
        header('Location:../offer-notice.php?succ');
        }
        else{
        header('Location:../offer-notice.php?err');
        }   
}
else{
	echo 'Access Denied';
}