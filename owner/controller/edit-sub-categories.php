<?php
if (isset($_POST['add_cat'])) {
	$cat=htmlspecialchars($_POST['cat']);
	$sub_cat=htmlspecialchars($_POST['sub_cat']);
	$gid=htmlspecialchars($_POST['gid']);
    $updatedate=date('d/m/20y');
    $updatetime=time();
	require_once('../autho/data-autho.php');
   echo $update = "UPDATE `sub` SET cat = '$cat', sub = '$sub_cat',updatedate='$updatedate',updatetime='$updatetime' WHERE id='$gid'";
        if (mysqli_query($con, $update)) {
        header('Location:../subcat.php?succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  

}
else{
	echo 'Access Denied';
}