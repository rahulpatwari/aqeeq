<?php
if (isset($_POST['add_cat'])) {
    $id=htmlspecialchars($_POST['id']);
    $link=htmlspecialchars($_POST['link']);
   
    require_once('../autho/data-autho.php');
        $update = "UPDATE `slider` SET link = '$link' WHERE id='$id'";
        if (mysqli_query($con, $update)) {
        header('Location:../add-slider.php?succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
    echo 'Access Denied';
}