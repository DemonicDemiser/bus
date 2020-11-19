<?php
	session_start();
	require "db_connect.php";

	$user_id = $_SESSION['user_id'];
	$arr = $_SESSION['shopping_cart'];

	$package_id=1;
	$sql = "SELECT package_id FROM ordersPM ORDER BY order_id DESC";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	if($row['package_id']>=1){
		$package_id=$row['package_id']+1;
	}
	
	for($i=0;$i<count($arr);$i++){ //two dimensional array
		$product_id = $arr[$i]['id'];
		$quantity = $arr[$i]['quantity'];
		for($j=0;$j<$quantity;$j++){
			$sql = "INSERT INTO ordersPM(user_id,product_id,package_id) VALUES($user_id,$product_id,$package_id)";
			mysql_query($sql);
			echo $sql;
		}
	}
	$_SESSION['shopping_cart']=[];
	header("Location: user_order.php");	
?>