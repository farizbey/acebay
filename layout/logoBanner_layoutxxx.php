<div class="col-xs-6 logo"></div>
<div class="col-xs-6 banner">
	<!-- Button trigger modal -->
	<i class="fa fa-shopping-cart fa-5x pull-right" aria-hidden="true" data-toggle="modal" data-target="#myModal"><span class="badge">
	<?php
	$utility_obj = new utility();
	// if (isset($_SESSION["cart"])) {
	$cart = new shoppingCart();
	// 	$cart = $_SESSION["cart"];
	// 	echo $cart->getTotalQty();
	// }
	?></span></i>
<!-- 	<button data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"><span class="badge">3</span></i></button> -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title" id="myModalLabel">Shopping Cart</h4>
	      		</div>
	      		<div class="modal-body">
	      			<table id="cart" class="table table-hover table-condensed">
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
						$cart = $_SESSION["cart"];
						if (isset($cart)) {
							if (!$utility_obj->isarrayempty($cart)) {
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
										<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
										<div class="col-sm-10">
											<h4 class="nomargin"><?php echo $value->collections_title; ?></h4>
											<p><?php echo $value->collections_descriptions; ?></p>
										</div>
									</div>
								</td>
								<td data-th="Price"><?php echo $value->collections_price; ?></td>
								<td data-th="Quantity">
									<input type="number" class="form-control text-center" value="1">
								</td>
								<td data-th="Subtotal" class="text-center"><?php
								$subtotal = $value->collections_price * $_SESSION["cart"][$i]["qty"];
								echo $subtotal;
								?></td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
								</td>
							</tr>
							<!-- <tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
										<div class="col-sm-10">
											<h4 class="nomargin">Product 1</h4>
											<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</td>
								<td data-th="Price">$1.99</td>
								<td data-th="Quantity">
									<input type="number" class="form-control text-center" value="1">
								</td>
								<td data-th="Subtotal" class="text-center">1.99</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
								</td>
							</tr> -->
						</tbody>
						<?php 
								}
							}
														
						

						?>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center"><strong>Totalx <?php echo $subtotal; ?></strong></td>
							</tr>
							<tr>
								<td><a href="#" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
								<td colspan="2" class="hidden-xs"></td>
								<td class="hidden-xs text-center"><strong>Total <?php 
								$total = 0;
								$total .= $total + $subtotal;
								echo $total;
								 ?></strong></td>
								<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
							</tr>
						</tfoot>
						<?php
						}			
						}
						?>
					</table>
	      		</div>
<!-- 		      	<div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    	<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
	    	</div>
	  	</div>
	</div>
</div>