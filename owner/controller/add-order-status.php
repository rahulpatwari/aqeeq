<?php
if (isset($_POST['submit'])) {
        $title=htmlspecialchars($_POST['title']);
        $order_id=htmlspecialchars($_POST['order_id']);
        $estimate_day=htmlspecialchars($_POST['estimate_day']);
        $tracking_id=htmlspecialchars($_POST['tracking_id']);
        
        $dartname=htmlspecialchars($_POST['dartname']);
        require_once('../autho/data-autho.php');  

        $update = "UPDATE `orders` SET status = '$title' WHERE order_id='$order_id'";
        if (mysqli_query($con, $update)) {
         if ($title=='Dispatched') {
                require_once('../autho/data-autho.php');      
           $sql_update = "UPDATE `orders` SET  estimate_day = '$estimate_day', tracking_id = '$tracking_id',dartname='$dartname'  WHERE order_id='$order_id'";
            $getupdate=mysqli_query($con, $sql_update);
            
              $sqls = mysqli_query($con,"Select * from `orders` where order_id = '$order_id' ");
              while($datas = mysqli_fetch_array($sqls)){
                $getuser_id=$datas['user_id'];
              }  

              $sql_user = mysqli_query($con,"Select * from `user` where user_id = '$getuser_id' ");
              while($duser = mysqli_fetch_array($sql_user)){
                 $getname=$duser['name'];
                 $getmobile=$duser['mobile'];
              }  


            require_once('tracking-msg.php');



        }    
        header('Location:../order-history.php?succ');
        }
        else{
         echo "Server Down";
        }  

       

}
else{
    echo "Access Denied";
}