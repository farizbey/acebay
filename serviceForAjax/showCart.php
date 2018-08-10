<?php 

ob_start();
session_start();
ob_end_clean();

include("../config/config.php");
include("../classes/database3.php");
include("../classes/utility.php");
include("../classes/shoppingCart.php");

?>

<thead>
	<tr>
		<th style="width:50%">Product</th>
		<th style="width:10%">Price</th>
		<th style="width:8%">Quantity</th>
		<th style="width:22%" class="text-center">Subtotal</th>
		<th style="width:10%"></th>
	</tr>
</thead>
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
<tbody>
	<tr>
		<td data-th="Product">
			<div class="row">
				<div class="col-sm-2 hidden-xs"><img src="images/<?php echo $value->image_name_thumb; ?>" alt="..." class="img-responsive"/></div>
				<div class="col-sm-10">
					<h4 class="nomargin"><?php echo $value->collections_title; ?></h4>
					<p><?php echo $value->collections_descriptions; ?></p>
				</div>
			</div>
		</td>
		<td data-th="Price">Rp.&nbsp<?php echo number_format($value->collections_price,0,",","."); ?></td>
		<td data-th="Quantity">
			<input type="number" class="form-control text-center" id="qtyx<?php echo $value->collections_id; ?>" value="<?php echo $_SESSION["cart"][$i]["qty"]; ?>" min="1">
		</td>
		<td data-th="Subtotal" class="text-center"><?php
								$subtotal = $value->collections_price * $_SESSION["cart"][$i]["qty"];
								echo "Rp.&nbsp;" . number_format($subtotal,0,",",".");
								$total = $total + $subtotal;
								?></td>
		<td class="actions" data-th="">
			<button class="btn btn-info btn-sm refreshx" collections_id="<?php echo $_SESSION["cart"][$i]["collections_id"]; ?>"><i class="fa fa-refresh"></i></button>
			<button class="btn btn-danger btn-sm trashx" collections_id="<?php echo $_SESSION["cart"][$i]["collections_id"]; ?>"><i class="fa fa-trash-o"></i></button>								
		</td>
	</tr>
</tbody>
<?php 
			}
		}
?>
<tfoot>
	<tr class="visible-xs">
		<td class="text-center"><strong>Total Rp.&nbsp<?php echo number_format($subtotal,0,",","."); ?></strong></td>
	</tr>
	<tr>
<!-- 		<td><a href="javascript:" id="clearcart" class="btn btn-danger"><i class="fa fa-times"></i> Clear All Product</a></td> -->
		<td colspan="2" class="hidden-xs"></td>
		<td class="hidden-xs text-center"><strong>Total Rp.&nbsp<?php 
								echo number_format($total,0,",",".");
								 ?></strong></td>
<!-- 		<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td> -->
	</tr>
</tfoot>
<?php
	}			
}
?>