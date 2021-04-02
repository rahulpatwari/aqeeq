<?php
if (isset($_POST['submit'])) {
    $id=htmlspecialchars($_POST['id']);
    $sub=htmlspecialchars($_POST['sub']);
    $serial=htmlspecialchars($_POST['serial']);
   
    require_once('../autho/data-autho.php');
     $sql="SELECT * FROM products WHERE sub = '$sub' AND serial_no='$serial'";
$result=mysqli_query($con,$sql);

 $count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count<1)
{
        $update = "UPDATE `products` SET serial_no = '$serial' WHERE id='$id'";
        if (mysqli_query($con, $update)) {
        header('Location:../manage.php?sub='.$sub.'&succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
         } 
        else{
            header('Location:../manage.php?serial='.$serial.'&sub='.$sub.'&all');
        } 
}
else{
    echo 'Access Denied';
}