<?php
if (isset($_POST['upload_img'])) {
		$f_name      = $_FILES['myfile']['name'];
        $f_tmp       = $_FILES['myfile']['tmp_name'];
        $f_size      = $_FILES['myfile']['size'];
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../images/" . $f_newfile;
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
        require_once('../autho/data-autho.php');
        $sql = "INSERT INTO `scroller`(`id`, `f_newfile`) VALUES(null,'" . $f_newfile . "')";
        if (mysqli_query($con, $sql)) {
        	header('Location:../topprouct.php?succ');
        }
        else{
        	header('Location:../topprouct.php?err');
        }
}