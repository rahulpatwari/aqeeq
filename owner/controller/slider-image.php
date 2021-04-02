<?php
if (isset($_POST['upload'])) {
    $pid=$_GET['id'];
		$f_name      = $_FILES['myfile']['name'];
        $f_tmp       = $_FILES['myfile']['tmp_name'];
        $f_size      = $_FILES['myfile']['size'];
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../slider_image/" . $f_newfile;
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
        $date=date('d/m/Y');
     
        require_once('../autho/data-autho.php');
      $sql = "INSERT INTO `slider_image`(`id`, `product_id`, `image`, `date`) VALUES (null,'" . $pid . "','" . $f_newfile . "','" . $date . "')";
      if (mysqli_query($con, $sql)) {
        header('Location:../slider-image.php?id='.$pid.'&succ');
        
      }
      else{
        
        header('Location:../slider-image.php?err');
      }
}