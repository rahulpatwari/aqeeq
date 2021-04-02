<?php
if (isset($_POST['add_cat'])) {
    $cat=htmlspecialchars($_POST['cat']);
    $gcat=htmlspecialchars($_POST['gcat']);
    $updatedate=date('d/m/20y');
    $updatetime=time();
    require_once('../autho/data-autho.php');
        $update = "UPDATE `cat` SET cat = '$cat',updatedate='$updatedate',updatetime='$updatetime' WHERE cat='$gcat'";
        if (mysqli_query($con, $update)) {
        header('Location:../add-categories.php?succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
    echo 'Access Denied';
}