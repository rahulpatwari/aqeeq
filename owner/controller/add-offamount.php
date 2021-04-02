<?php
if (isset($_POST['amount'])) {
   $id="1";
    $amount=htmlspecialchars($_POST['pamount']);
    $cashback=htmlspecialchars($_POST['cashback']);
    $offer_amount=htmlspecialchars($_POST['offer_amount']);

    ;
	require_once('../autho/data-autho.php');
       echo  $update = "UPDATE `offer_amount` SET amount = '$amount', referal_amount ='$offer_amount',per='$cashback' WHERE id='$id'";
        if (mysqli_query($con, $update)) {
        header('Location:../offer.php?succ');
        }
        else{
        header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
	echo 'Access Denied';
}