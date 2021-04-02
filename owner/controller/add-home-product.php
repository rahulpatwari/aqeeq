<?php
if (isset($_POST['upload_product'])) {
        require_once('../autho/data-autho.php');    
        $product_code=$_POST['product_code'];
        $product_name=$_POST['product_name'];
        $product_desc=$_POST['product_desc'];
        $price=$_POST['price'];
        $offer=$_POST['offer'];
        $cat=$_POST['cat'];
        $sub=$_POST['sub'];
        $f_name      = $_FILES['myfile']['name'];
        $f_tmp       = $_FILES['myfile']['tmp_name'];
        $f_size      = $_FILES['myfile']['size'];
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
        /*Insert Data Into Database*/
        $date=date('d/m/20y');
        $month=date('F');
        echo $sql = "INSERT INTO `homeproduct`(`id`,`date`,`month`,`product_code`,`product_name`,`product_desc`,`price`,`offer`,`cat`,`sub`,`f_newfile`) VALUES(null,'".$date."','".$month."','".$product_code."','".$product_name."','".$product_desc."','".$price."','".$offer."','".$cat."','".$sub."','".$f_newfile."')";
        if (mysqli_query($con, $sql)) {
            header('Location:../add-home-product.php?succ');
        }
        else{
            header('Location:../add-home-product.php?err');
        }
}