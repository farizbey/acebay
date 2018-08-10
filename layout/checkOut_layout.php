<?php 
//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg
?>

<div class="row cart-body">
	<!--START OF FORM-->
	<form class="form-horizontal" method="post" action="process/saveOrder_process.php">
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
	        <!--REVIEW ORDER-->
	        <div class="panel panel-warning">
	            <div class="panel-heading">
	                Review Order <div class="pull-right"><small><a class="afix-1" href="index.php?shoppingCart">Edit Cart</a></small></div>
	            </div>
	            <div class="panel-body">
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
	                <div class="form-group">
	                    <div class="col-sm-3 col-xs-3">
	                        <img class="img-responsive" src="images/<?php echo $value->image_name_thumb; ?>" />
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <div class="col-xs-12"><?php echo $value->collections_title; ?></div>
	                        <div class="col-xs-12"><small>Quantity:<span><?php echo $_SESSION["cart"][$i]["qty"]; ?></span></small></div>
	                    </div>
	                    <div class="col-sm-3 col-xs-3 text-right">
	                        <h6><span>Rp.&nbsp</span><?php
								$subtotal = $value->collections_price * $_SESSION["cart"][$i]["qty"];
								echo "Rp.&nbsp;" . number_format($subtotal,0,",",".");
								$total = $total + $subtotal;
								?></h6>
	                    </div>
	                </div>
	                <!-- <div class="form-group"><hr /></div>
	                <div class="form-group">
	                    <div class="col-sm-3 col-xs-3">
	                        <img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <div class="col-xs-12">Product name</div>
	                        <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
	                    </div>
	                    <div class="col-sm-3 col-xs-3 text-right">
	                        <h6><span>$</span>25.00</h6>
	                    </div>
	                </div>
	                <div class="form-group"><hr /></div>
	                <div class="form-group">
	                    <div class="col-sm-3 col-xs-3">
	                        <img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <div class="col-xs-12">Product name</div>
	                        <div class="col-xs-12"><small>Quantity:<span>2</span></small></div>
	                    </div>
	                    <div class="col-sm-3 col-xs-3 text-right">
	                        <h6><span>$</span>50.00</h6>
	                    </div>
	                </div> -->
	        <?php 
						}
					}
			?>
	                <div class="form-group"><hr /></div>
	                <div class="form-group">
	                    <div class="col-xs-12">
	                        <strong>Subtotal</strong>
	                        <div class="pull-right"><span>Rp.&nbsp</span><span><?php 
								echo number_format($total,0,",",".");
								 ?></span></div>
	                    </div>
	                    <div class="col-xs-12">
	                        <small>Shipping</small>
	                        <div class="pull-right"><span>-</span></div>
	                    </div>
	                </div>
	                <div class="form-group"><hr /></div>
	                <div class="form-group">
	                    <div class="col-xs-12">
	                        <strong>Order Total</strong>
	                        <div class="pull-right"><span>Rp.&nbsp</span><span><?php 
								echo number_format($total,0,",",".");
								 ?></span></div>
	                    </div>
	                </div> 
	            </div>
	        </div>
	        <?php 
				}
			}
			?>
	        <!--REVIEW ORDER END-->
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
	        <!--SHIPPING METHOD-->
	        <div class="panel panel-warning">
	            <div class="panel-heading">Address</div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <div class="col-md-12">
	                        <h4>Shipping Address</h4>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Country:</strong></div>
	                    <div class="col-md-12">
	                        <input type="text" class="form-control" name="country" value="" />
	                        <input type="hidden" name="member_id" value="<?php if (!empty($_SESSION['member_id']) || (isset($_SESSION['member_id']))) {
	$member_id = $_SESSION['member_id'];
}
else {
	$member_id = "0";
} echo $member_id; ?>" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-6 col-xs-12">
	                        <strong>First Name:</strong>
	                        <input type="text" name="first_name" class="form-control" value="" />
	                    </div>
	                    <div class="span1"></div>
	                    <div class="col-md-6 col-xs-12">
	                        <strong>Last Name:</strong>
	                        <input type="text" name="last_name" class="form-control" value="" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Address:</strong></div>
	                    <div class="col-md-12">
	                        <input type="text" name="address" class="form-control" value="" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>City:</strong></div>
	                    <div class="col-md-12">
	                        <input type="text" name="city" class="form-control" value="" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>State:</strong></div>
	                    <div class="col-md-12">
	                        <input type="text" name="state" class="form-control" value="" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
	                    <div class="col-md-12">
	                        <input type="text" name="zip_code" class="form-control" value="" />
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Phone Number:</strong></div>
	                    <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Email Address:</strong></div>
	                    <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
	                </div>
	            </div>
	        </div>
	        <!--SHIPPING METHOD END-->
	        <!--CREDIT CART PAYMENT-->
	        <div class="panel panel-warning">
	            <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Card Type:</strong></div>
	                    <div class="col-md-12">
	                        <select id="CreditCardType" name="CreditCardType" class="form-control">
	                            <option value="5">Visa</option>
	                            <option value="6">MasterCard</option>
	                            <option value="7">American Express</option>
	                            <option value="8">Discover</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Credit Card Number:</strong></div>
	                    <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12"><strong>Card CVV:</strong></div>
	                    <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12">
	                        <strong>Expiration Date</strong>
	                    </div>
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                        <select class="form-control" name="">
	                            <option value="">Month</option>
	                            <option value="01">01</option>
	                            <option value="02">02</option>
	                            <option value="03">03</option>
	                            <option value="04">04</option>
	                            <option value="05">05</option>
	                            <option value="06">06</option>
	                            <option value="07">07</option>
	                            <option value="08">08</option>
	                            <option value="09">09</option>
	                            <option value="10">10</option>
	                            <option value="11">11</option>
	                            <option value="12">12</option>
	                    </select>
	                    </div>
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                        <select class="form-control" name="">
	                            <option value="">Year</option>
	                            <option value="2015">2015</option>
	                            <option value="2016">2016</option>
	                            <option value="2017">2017</option>
	                            <option value="2018">2018</option>
	                            <option value="2019">2019</option>
	                            <option value="2020">2020</option>
	                            <option value="2021">2021</option>
	                            <option value="2022">2022</option>
	                            <option value="2023">2023</option>
	                            <option value="2024">2024</option>
	                            <option value="2025">2025</option>
	                    </select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-12">
	                        <span>Pay secure using your credit card.</span>
	                    </div>
	                    <div class="col-md-12">
	                        <ul class="cards">
	                            <li class="visa hand">Visa</li>
	                            <li class="mastercard hand">MasterCard</li>
	                            <li class="amex hand">Amex</li>
	                        </ul>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                        <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!--CREDIT CART PAYMENT END-->
	    </div>
	</form> <!--END OF FORM-->
</div>
