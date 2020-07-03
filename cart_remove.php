<?php
    require 'function/db.php';
    session_start();
    /*$item_id=$_GET['id'];
    

		$sql = "DELETE FROM users_items where item_id='$item_id' " ;

		$result = query($sql);
		confirm($result);
    
    header('location: cart.php');


    session_start();*/
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
if(isset($_GET['remove'])){
	$delitem = $_GET['remove'];
	unset($cartitems[$delitem]);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
}
else{
	unset($cartitems[$delitem]);
}
header('location:cart.php');
?>