<?php 

ob_start();
session_start();
ob_end_clean();

include "../classes/database3.php";

?>

<div class="row" id="searchHome_layout">
	<?php 

	$keyword = isset($_GET["search"]) ? $_GET['search'] : "";


	?>
		<!-- Left Content -->
		<div class="col-md-9">
			<p>Latest News</p>
			<?php 
			$db = new Database();
			$sql = $db->query("SELECT * FROM blogs_tbl WHERE blog_title LIKE '%$keyword%' ORDER BY create_date");
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
			<?php 
			//echo var_dump($sql);
			?>

		</div>

		<!-- Right Content -->
		<div class="col-md-3">
			<p>Latest Collections</p>
			<?php 
			$sql2 = $db->query("SELECT * FROM collections_tbl WHERE collections_title LIKE '%$keyword%' ORDER BY create_date LIMIT 3"); 
			foreach ($sql2 as $value2) {
			?>
			<div class="col-sm-12 col-md-12 text-center">
		    	<div class="thumbnail">
		      		<img src="images/<?php echo $value2->image_name_thumb; ?>" alt="..."/>
		      		<div class="caption">
		        		<h3><?php echo $value2->collections_title; ?></h3>
		        		<p><?php echo $value2->collections_descriptions; ?></p>
		        		<p><a href="#" class="btn btn-primary" role="button">Rp. <?php echo $value2->collections_price; ?></a> <a href="javascript:" collections_id="<?php echo $value2->collections_id; ?>" class="btn btn-default" role="button">Add To Cart</a>
		        		</p>
		      		</div>
		      	</div>
		  	</div>
		  	<?php 
		  	}
			?>

		</div>

</div> <!-- End of Row Content -->