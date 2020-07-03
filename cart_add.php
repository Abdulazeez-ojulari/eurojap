<?php

require 'function/db.php';
require 'function/function.php';
    //require 'header.php';

    session_start();


if(isset($_SESSION['cart'])){

	if (!empty($_SESSION['cart'])) {
		# code...
	
	$items = $_SESSION['cart'];
	$cartitems = explode(",", $items);
	$items .= "," . $_GET['id'];
	$_SESSION['cart'] = $items;
	set_message("<p class=bg-success text-center>Item added to cart</p>");
	 header('location: dispenser.php');
	}else{
	$items = $_GET['id'];
	$_SESSION['cart'] = $items;
	set_message("<p class=bg-success text-center>Item added to cart</p>");
	header('location: dispenser.php');

	
	
	}

}else{
	session_destroy();
	
}
    
    
   
?>