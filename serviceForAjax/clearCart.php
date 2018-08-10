<?php

ob_start();
session_start();
ob_end_clean();

include("../config/config.php");
include("../classes/shoppingCart.php");

// $_SESSION["cart"] = array(1)[0]=>array(2);
// $_SESSION['cart'] = [0=>array("collections_id"=> "1", "qty"=> "1")];
// var_dump($_SESSION['cart']);
// echo "<br>";
$cart = new shoppingCart();
$cart->clearCart();

// echo "<br>";

echo $cart->getTotalQty();

// echo "<br>";
// var_dump($_SESSION["cart"]);
?>