<?php
if (isset($_POST['submit'])) {
require_once('../autho/data-autho.php');
$f_name      = $_FILES['myfile']['name'];
        $f_tmp       = $_FILES['myfile']['tmp_name'];
        $f_size      = $_FILES['myfile']['size'];
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../premslider/" . $f_newfile;
        if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' || $f_extension == 'gif') {
            if ($f_size >= 1000000) {
                echo "max size is 10 mb";
            } else {
                if (move_uploaded_file($f_tmp, $store)) {
                    echo "uploaded";
                }
            }
        }
$title=mysqli_real_escape_string($con,$_POST['title']); 
$url=mysqli_real_escape_string($con,$_POST['url']);
$date=date('d/m/Y');

  $sql = "INSERT INTO `featured_slider`(`id`, `date`, `title`, `url`, `image`) VALUES(null,'" . $date . "','" . $title . "','" . $url . "','" . $f_newfile . "')";
if (mysqli_query($con, $sql)) {
        header('Location:../premium-product-slider.php?succ');
        }
        else{
        header('Location:../premium-product-slider.php?err');
        }   
}
else{
	echo 'Access Denied';
}