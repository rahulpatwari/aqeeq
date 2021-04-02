<?php
if (isset($_POST['upload_product'])) {
        require_once('../autho/data-autho.php');    
       // $cat=$_POST['cat'];
       // $subcat=$_POST['sub'];
        $name=$_POST['product_name'];
        $cat=$_POST['cat'];
        $sub=$_POST['sub'];
        $extra=$_POST['extra'];
        $brand=ucfirst(strtolower($_POST['brand']));
        $gender=ucfirst(strtolower($_POST['gender']));
        $details=mysqli_real_escape_string($con,$_POST['product_desc']);
        $quantity=$_POST['quantity'];
        $shipment = $_POST['shipment'];
       // $details=mysqli_real_escape_string($con,$_POST['details']);
        $id=$_POST['id'];
        //$photo=$_POST['photo']; 
        $amt=$_POST['price'];
        $offer=$_POST['offer'];
        
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
        /*Insert Data Into Database*/
        $date=date('d/m/20y');
        $month=date('F');


        if (empty($f_name)) {
               $update = "UPDATE `products` SET cat='$cat',sub='$sub', brand='$brand',product_name = '$name', product_desc = '$details', price = '$amt', offer = '$offer', quantity = '$quantity', gender = '$gender',extra='$extra', shipment = $shipment WHERE id='$id'";
        }
        else{
             $update = "UPDATE `products` SET cat='$cat',sub='$sub',brand='$brand', product_name = '$name', product_desc = '$details', price = '$amt', offer = '$offer', f_newfile = '$f_newfile', quantity = '$quantity', gender = '$gender' ,extra='$extra', shipment = $shipment  WHERE id='$id'";
        }

        if (mysqli_query($con, $update)) {
        header('Location:../view-product.php?succ');
        }
        else{
        header('Location:../view-product.php?err');
         
        }  




        /*$sql = "INSERT INTO `product`(`id`, `product_id`, `name`, `details`, `amt`, `photo`) VALUES(null,'" . $cat . "','" . $name . "','" . $details . "','" . $amt . "','" . $f_newfile . "')";
        if (mysqli_query($con, $sql)) {
        	header('Location:../add-product.php?succ');
        }
        else{
        	header('Location:../add-product.php?err');
        }*/
}