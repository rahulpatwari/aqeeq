<?php
include('config.php');
$cat=$_POST['cat'];
$sub=$_POST['sub'];
$sql="INSERT INTO `ganeshmart`.`sub` (`id`, `cat`, `sub`) values(null,'".$cat."','".$sub."')" ;

if(!mysql_query($sql,$con))
{
echo"KALAT";
}
else
{
echo"Your subcategories is added.......!!!!!";
echo '<meta http-equiv="refresh" content="1; url=viewsubcat.php">';
}
 
mysql_close($con);
?>


