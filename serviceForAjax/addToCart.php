<?php

ob_start();
session_start();
ob_end_clean();


include("../config/config.php");
include("../classes/shoppingCart.php");

if (isset($_POST["collections_id"]) && isset($_POST["qty"])) 
{
	# code...
	$cart = new shoppingcart();
	$cart->addtocart($_POST["collections_id"], $_POST["qty"]);
	echo $cart->gettotalqty();	
	// var_dump($_SESSION["cart"]);
}

?>