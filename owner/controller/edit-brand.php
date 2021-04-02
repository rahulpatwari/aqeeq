<?php
if (isset($_POST['add_brand'])) {
    $id=htmlspecialchars($_POST['id']);
	$brand=ucwords(strtolower(htmlspecialchars($_POST['brand'])));
    $updatedate=date('d/m/20y');
   date_default_timezone_set('Asia/Kolkata');
  $updatetime=date( 'H:i:s', time ());
  $f_name      = $_FILES['photo']['name'];
        $f_tmp       = $_FILES['photo']['tmp_name'];
        $f_size      = $_FILES['photo']['size'];

        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../product/" . $f_newfile;
        if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' || $f_extension == 'gif') {
            if ($f_size >= 1000000) {
                echo "max size is 10 mb";
            } else {
                if (move_uploaded_file($f_tmp, $store)) {
                    echo "uploaded";
                }
            }
        }
	require_once('../autho/data-autho.php');
 
  if (empty($f_name)) {
               $update = "UPDATE `brand` SET brand_name = '$brand',update_date='$updatedate',update_time='$updatetime' WHERE id='$id'";
        }
        else{
             $update = "UPDATE `brand` SET brand_name = '$brand', f_newfile = '$f_newfile',update_date='$updatedate',update_time='$updatetime' WHERE id='$id'";
        }

  

       
        if (mysqli_query($con, $update)) {
        header('Location:../add-brand.php?succ');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
	echo 'Access Denied';
}