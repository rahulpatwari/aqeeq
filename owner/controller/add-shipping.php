<?php
if (isset($_POST['submit'])) {
   
    $amount=htmlspecialchars($_POST['sub_cat']);
    $id=htmlspecialchars($_POST['id']);
   
    require_once('../autho/data-autho.php');
        $update = "UPDATE `shipping` SET ship_amount = '$amount' WHERE ship_amount='$id'";
        if (mysqli_query($con, $update)) {
        header('Location:../shipping.php?succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
    echo 'Access Denied';
}