<?php
if (isset($_POST['upload_product'])) {
        require_once('../autho/data-autho.php');    
        $product_code=$_POST['product_code'];
        $brand=ucfirst(strtolower($_POST['brand']));
        $gender=ucfirst(strtolower($_POST['gender']));
        $product_name=mysqli_real_escape_string($con,$_POST['product_name']);
        $product_desc=mysqli_real_escape_string($con,$_POST['product_desc']);
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $extra=$_POST['extra'];
        $offer=$_POST['offer'];
        $cat=$_POST['cat'];
        $sub=$_POST['sub'];
     $shipment = $_POST['shipment'];
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
        $sql="SELECT * FROM products WHERE sub = '$sub'";
        $result=mysqli_query($con,$sql);

        $count=mysqli_num_rows($result);

        $get_serial=$count+1;
        $date=date('d/m/20y');
        $month=date('F');
        echo $sql = "INSERT INTO `products`(`id`,`date`,`month`,`brand`,`product_code`,`product_name`,`product_desc`,`price`,`offer`,`cat`,`sub`,`f_newfile`,`quantity`,`gender`,`extra`,`serial_no`,`shipment`) VALUES(null,'".$date."','".$month."','".$brand."','".$product_code."','".$product_name."','".$product_desc."','".$price."','".$offer."','".$cat."','".$sub."','".$f_newfile."','".$quantity."','".$gender."','".$extra."','".$get_serial."','".$shipment."')";
        if (mysqli_query($con, $sql)) {
            header('Location:../add-product.php?succ');
        }
        else{
            header('Location:../add-product.php?err');
        }
}