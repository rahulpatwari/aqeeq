<?php
if (isset($_POST['submit'])) {
	 require_once('../owner/autho/data-autho.php');

     $email=htmlspecialchars($_POST['email']);
      $sql="INSERT INTO `subscribe`(`id`, `email`) VALUES(null,'" . $email . "')";

      if (mysqli_query($con, $sql)) {
            header('location:../index.php?succ');
        }
        else{
              // header('location:../index.php?err');
        }		
		
}


?>