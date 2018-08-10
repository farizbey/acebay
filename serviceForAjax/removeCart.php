<?php

ob_start();
session_start();
ob_end_clean();


include("../config/config.php");
include("../classes/shoppingCart.php");

if (isset($_POST["collections_id"])) 
{
	# code...
	$cart = new shoppingCart();
	$cart->removeCart($_POST["collections_id"]);
	echo $cart->getTotalQty();
}


