<?php
	require_once('../../owner/autho/data-autho.php');
	// header('Content-Type: application/json');
	// $headers = apache_request_headers();
	// $get_id = $headers['Authorization'];
	
    // $get_id=htmlspecialchars($_GET['id']);
	$userdata = mysqli_query($con,"Select * from products");
        while($udata = mysqli_fetch_assoc($userdata)){

        $id=htmlspecialchars($udata['id']);
        $product_name=htmlspecialchars($udata['product_name']);
        $brand=htmlspecialchars($udata['brand']);
        $cat=htmlspecialchars($udata['cat']);
        $sub=htmlspecialchars($udata['sub']);
        $extra=htmlspecialchars($udata['extra']);
        $offer=htmlspecialchars($udata['offer']);
        $price=htmlspecialchars($udata['price']);
        $month=htmlspecialchars($udata['month']);
        $product_code=htmlspecialchars($udata['product_code']);
        $product_desc=htmlspecialchars($udata['product_desc']);
        $gender=htmlspecialchars($udata['gender']);
        $shipment=htmlspecialchars($udata['shipment']);
        $f_newfile=htmlspecialchars("https://aqeeqtrading.com/product/".$udata['f_newfile']);
        $serial_no=htmlspecialchars($udata['serial_no']);
        $quantity=htmlspecialchars($udata['quantity']);
    	$status=htmlspecialchars($udata['status']);
   
        $myObj[]=array('id' =>$id,
        'product_name'=>$product_name,
        'brand'=>$brand,
        'cat'=>$cat,
        'sub'=>$sub,
        'extra'=>$extra,
        'offer'=>$offer,
        'price'=>$price,
        'month'=>$month,
        'product_code'=>$product_code,
        'product_desc'=>$product_desc,
        'gender'=>$gender,
        'shipment'=>$shipment,
        'f_newfile'=>$f_newfile,
        'serial_no'=>$serial_no,
        'quantity'=>$quantity,
        'status'=>$status
        );
     
}

echo $myJSON = json_encode(['row'=>$myObj]);
