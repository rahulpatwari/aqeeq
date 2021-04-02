<?php

session_start();

include_once("config.php");

//add product to session or create new one

 if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["product_qty"]>0)

 {
 	foreach($_POST as $key => $value){ //add all post vars to new_product array

 		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
 }


  //remove unecessary vars



	unset($new_product['type']);



	unset($new_product['return_url']); 



	



 	//we need to get product name and price from database.



    $statement = $mysqli->prepare("SELECT product_name, offer FROM products WHERE product_code=? LIMIT 1");



    $statement->bind_param('s', $new_product['product_code']);



    $statement->execute();



    $statement->bind_result($product_name, $price);



	



	while($statement->fetch()){



		



		//fetch product name, price from db and add to new_product array



        $new_product["product_name"] = $product_name; 



        $new_product["product_price"] = $price;



        



        if(isset($_SESSION["cart_products"])){  //if session var already exist



            if(isset($_SESSION["cart_products"][$new_product['product_code']])) //check item exist in products array



            {



                unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item



            }           



        }



        $_SESSION["cart_products"][$new_product['product_code']] = $new_product; //update or create product session with new item  



    } 



}











//update or remove items 



if(isset($_POST["product_qty"]) || isset($_POST["remove_code"]))



{



	//update item quantity in product session



	if(isset($_POST["product_qty"]) && is_array($_POST["product_qty"])){



		foreach($_POST["product_qty"] as $key => $value){



			if(is_numeric($value)){



				$_SESSION["cart_products"][$key]["product_qty"] = $value;



			}



		}



	}



	//remove an item from product session



	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){



		foreach($_POST["remove_code"] as $key){



			unset($_SESSION["cart_products"][$key]);



		}	



	}



}







//back to return url



$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url


 $def =  $_POST['getbrand'];
 $def1 =  $_POST['getgender'];
 $def2 =  $_POST['getfilter'];

 if ($def=="''") {
 	$defb=0;
 }else{
 	$defb=$def;
 }

 if ($def1=="''") {
 		$defg=0;
 }else{
 	$defg=$def1;
 }
 if ($def2=="''") {
 	$deff=0;
 }
 else{
 	$deff=$def2;
 }




if ($return_url=='http://aqeeqtrading.com/products.php?allfilter') { ?>
<form action="products.php?allfilter&sendfilter" method="POST" name="sub">
	<input type="hidden" name="brand" value="<?php print_r($defb); ?>">
	<input type="hidden" name="gender" value="<?php print_r($defg); ?>">
	<input type="hidden" name="filter" value="<?php print_r($deff); ?>">
	<!-- <input type="submit" value="submit"> -->
</form> 

<script>
	window.onload=function(){
	  document.forms['sub'].submit();	
	}

</script>
<?php }elseif($return_url=='http://aqeeqtrading.com/products.php?sendfilter'){ ?>
<form action="products.php?allfilter&sendfilter" method="POST" name="sub">
	<input type="hidden" name="brand" value="<?php print_r($defb); ?>">
	<input type="hidden" name="gender" value="<?php print_r($defg); ?>">
	<input type="hidden" name="filter" value="<?php print_r($deff); ?>">
	<!-- <input type="submit" value="submit"> -->
</form> 

<script>
	window.onload=function(){
	  document.forms['sub'].submit();	
	}

</script>

<?php }
else{
header('Location:'.$return_url);

}







?>

<!-- <form action="products.php?allfilter&sendfilter" method="POST" name="sub">
	<input type="hidden" name="brand" value="<?php print_r($defb); ?>">
	<input type="hidden" name="gender" value="<?php print_r($defg); ?>">
	<input type="hidden" name="filter" value="<?php print_r($deff); ?>"> -->
	<!-- <input type="submit" value="submit"> -->
<!-- </form> 

<script>
	window.onload=function(){
	  document.forms['sub'].submit();	
	}

</script> -->