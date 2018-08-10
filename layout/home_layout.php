<div class="row">
	<!-- Left Content -->
	<div class="col-lg-9 col-md-12">
		<p>Latest News</p>
		<?php 
		$db = new Database();
		$sql = $db->query("SELECT * FROM blogs_tbl ORDER BY create_date");
		foreach ($sql as $value) {						
		?>
		<div class="media">
			<div class="media-left media-middle">
				<a href="index.php?blogDetail&blog_id=<?php echo $value->blog_id?>">
					<img class="media-object" src="images/<?php echo $value->blog_image_thumb; ?>" alt="..."/>
				</a>
			</div>
			<div class="media-body">
				<a href="index.php?blogDetail&blog_id=<?php echo $value->blog_id?>">
					<h4 class="media-heading"><?php echo $value->blog_title; ?></h4>
				</a>
				<p class="text"><?php echo $value->blog_details_preview; ?></p>
			</div>
		</div>
		<?php 
		} ?>
	</div>

	<!-- Right Content -->
	<div class="col-lg-3 col-md-12 text-center">
		<p>Latest Collections</p>
		<?php 
		$sql2 = $db->query("SELECT * FROM collections_tbl ORDER BY create_date LIMIT 2"); 
		foreach ($sql2 as $value2) {
		?>
		<!-- <div class="col-sm-12 col-md-12 text-center"> -->
	    	<div class="thumbnail">
	      		<img src="images/<?php echo $value2->image_name_thumb; ?>" alt="..."/>
	      		<div class="caption">
	        		<a href="index.php?collectionsDetail&collections_id=<?php echo $value2->collections_id?>"><h3><?php echo $value2->collections_title; ?></h3></a>
	        		<p><?php echo $value2->collections_descriptions; ?></p>
	        		<p><a href="#" class="btn btn-primary" role="button">Rp. <?php echo $value2->collections_price; ?></a> <a href="javascript:" collections_id="<?php echo $value2->collections_id; ?>" class="btn btn-default" role="button">Add To Cart</a>
	        		</p>
	      		</div>
	      	</div>
	  	<!-- </div> -->
	  	<?php 
	  	}
		?>
	</div>
		<?php
		/*
		* Debug
		*/
		// echo '<pre>', print_r($_SESSION["cart"]), '</pre>';

		// $cart = $_SESSION["cart"];
		// $utility_obj = new utility();
		// if (!$utility_obj->isarrayempty($cart)) {
		// 	for ($i=0; $i <= count($cart)-1; $i++) {
		// 		$sqlx = "SELECT * FROM collections_tbl WHERE collections_id = " . $cart[$i]['collections_id'];
		// 		$results = $db->query($sqlx);
		// 		foreach ($results as $valuex) {
		// 			echo $valuex->collections_price;
		// 		}
		// 	}	
		// }
		// echo '<pre>', var_dump($_SESSION["cart"][0]["tshirt_id"]), '</pre>';
		?>
</div> <!-- End of Row Content -->