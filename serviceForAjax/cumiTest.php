<?php 

ob_start();
session_start();
ob_end_clean();

include("../config/config.php");
include("../classes/database3.php");
include("../classes/utility.php");
include("../classes/shoppingCart.php");

?>

	<h1>Shopping Cart</h1><hr>
	<table class="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>Item</th>
                <th>QTY</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
            <?php
if (isset($_SESSION["cart"])) {
    $utility_obj = new utility();
    $cart = $_SESSION["cart"];
    if (!$utility_obj->isarrayempty($cart)) {
        $total = 0;
        for ($i=0; $i <= count($cart)-1; $i++) { 
            $sql = "SELECT * FROM collections_tbl WHERE collections_id = " . $cart[$i]['collections_id'];
            $db = new Database();
            $results = $db->query($sql);
            foreach ($results as $value) {  
?>
            <tr>
                <td><?php echo $value->collections_title; ?></td>
                <td><?php echo $_SESSION["cart"][$i]["qty"]; ?> <a href="#">X</a></td>
                <td><?php echo $value->collections_price; ?></td>
                <td><?php
                                $subtotal = $value->collections_price * $_SESSION["cart"][$i]["qty"];
                                echo $subtotal;
                                $total = $total + $subtotal;
                                ?></td>
                
            </tr>
            <tr>
                <th colspan="3"><span class="pull-right">Sub Total</span></th>
                <th><?php
                                // $subtotal = $value->collections_price * $_SESSION["cart"][$i]["qty"];
                                echo $subtotal;
                                // $total = $total + $subtotal;
                                ?></th>
            </tr>
            <tr>
                <th colspan="3"><span class="pull-right">VAT 20%</span></th>
                <th>£50.00</th>
            </tr>
            <?php 
            }
        }
?>
            <tr>
                <th colspan="3"><span class="pull-right">Total</span></th>
                <th><?php 
                                echo $total;
                                 ?></th>
            </tr>
            <tr>
                <td><a href="#" class="btn btn-primary">Continue Shopping</a></td>
                <td colspan="3"><a href="index.php?shoppingCart" class="pull-right btn btn-success">Checkout</a></td>
            </tr>
        </tbody>
    </table>
    <?php
    }           
}
?>            
