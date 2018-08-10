<?php
if (isset($_GET["collections_id"])) {
	if ($_GET["collections_id"] != "" && is_numeric($_GET["collections_id"])) {
		
		$db = new Database();

		$collections_id = $_GET["collections_id"];
		$data = array("collections_id"=> $collections_id);
		$sql = "SELECT * FROM collections_tbl WHERE collections_id = ?";

		$result = $db->select($sql, $data, array('s'));

		// echo var_dump($result);
?>
		<!-- Collections Detail Content -->
		<div class="row">
			<div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4" style="padding-top: 20px;">
		    	<div class="thumbnail">
		      		<img src="images/<?php echo $result->image_name_thumb; ?>" alt="..."/>
		      		<div class="caption">
		        		<h3 class="text-center"><?php echo $result->collections_title; ?></h3>
		        		<p><?php echo $result->collections_descriptions_full; ?></p>
		        		<p class="text-center"><a href="#" class="btn btn-primary" role="button">Rp. <?php echo $result->collections_price; ?></a> <a href="javascript:" collections_id="<?php echo $result->collections_id; ?>" class="btn btn-default" role="button">Add To Cart</a>
		        		</p>
		      		</div>
		      	</div>
		  	</div>
		</div> 
<?php
	}

}
?>
		<!-- Comment -->
		<div class="row">
			<div class="center-block col-lg-12 col-md-12 col-sm-12">
				<!-- Form Start -->
                <form class="form-horizontal" method="post" action="process/collectionsComment_process.php">
					<div class="form-group">
						<h3 class="text-center">Post Comment</h3>
							<textarea class="form-control" rows="3" id="comment" style="resize: vertical" name="comment" placeholder="Leave Your Comment Here..." required></textarea>
					</div>
					<input type="hidden" value="<?php echo $_GET['collections_id']; ?>" name="collections_id" />
					<input type="hidden" value="<?php if (!empty($_SESSION['member_email']) || (isset($_SESSION['member_email']))) {
$comment_sender_email = $_SESSION['member_email'];
}
else {
$comment_sender_email = "Anonymous";
} echo $comment_sender_email; ?>" name="member_email" />
					<div class="col-md-offset-10 col-xs-offset-10" style="float:right;">
						<input class="btn btn-default" type="submit" value="Submit"/>
					</div>
                </form>
                <!-- End of Form -->
                <div class="clearfix"></div>
                <!-- View Comments -->
                <?php
                if (isset($_GET["collections_id"])) {
                	$collections_id = $_GET["collections_id"];            

	                $sql2 = $db->query("SELECT * FROM collections_comment_tbl WHERE comment_collections_id = $collections_id ORDER BY create_date DESC");
	            ?>
	            	<?php
	                if (!empty($sql2) && isset($sql2) && $sql2 != NULL) {
						foreach ($sql2 as $key) {
							$date = new dateTime($key->create_date);
							$date = date_format($date, 'M j, Y | H:i:s');
							$code = $key->code;
	            	?>
	            			<!-- Start Parent Comment -->
							<div class="panel panel-primary" id="<?php echo $key->code; ?>">
							  	<div class="panel-heading">
								    <h3 class="panel-title pull-left"><?php echo $key->comment_sender_email; ?></h3>
								    <h5 class="panel-title pull-right"><?php echo $date; ?></h5>
								    <div class="clearfix"></div>
							  	</div>
							  	<div class="panel-body">
								    <?php echo $key->comment; ?>				  	
							  	</div>
							</div>
							<!-- End of Parent Comment -->
							<?php
							$sql3 = "SELECT * FROM child_collections_comment_tbl WHERE par_code = '$code' ORDER BY create_date DESC";
							$chi_count = $db->num_rows($sql3);
							$chi_result = $db->query($sql3);		
							?>
							<!-- Start of Reply and Replies Button -->
							<p class="text-right" style="cursor:pointer;">
								<a class="collections_reply_comment" id="collections_reply_comment" name="<?php echo $key->code; ?>" collectionsId="<?php echo $_GET['collections_id']; ?>" account="<?php if (!empty($_SESSION['member_email']) || (isset($_SESSION['member_email']))) {
$comment_sender_email = $_SESSION['member_email'];
}
else {
$comment_sender_email = "Anonymous";
} echo $comment_sender_email; ?>">Reply</a>
							<?php 
							if ($chi_count <=0 ) {
							} else {
							?>
								<a class="children" name="<?php echo $key->code; ?>"><span class="tog_text" style="padding-left: 10px;">Replies<i class="fa fa-angle-double-down fa-lg" aria-hidden="true">(<?php echo $chi_count; ?>)</i></span></a>
							</p>
								<!-- End of Reply and Replies Button -->
								<?php
								foreach ($chi_result as $child) {
									$date2 = new dateTime($child->create_date);
									$date2 = date_format($date2, 'M j, Y | H:i:s');
								?>
								<!-- Start of Child Comments -->
								<div class="child-comments C-<?php echo $key->code; ?>" style="margin-left: 20px;">
									<div class="panel panel-info">
									  	<div class="panel-heading">
										    <h3 class="panel-title pull-left"><?php echo $child->child_collections_comment_sender_email; ?></h3>
										    <h5 class="panel-title pull-right"><?php echo $date2; ?></h5>
										    <div class="clearfix"></div>
									  	</div>
									  	<div class="panel-body">
										    <?php echo $child->child_collections_comment; ?>
									  	</div>
									</div>
								</div>
								<!-- End of Child Comments -->
								<?php
								}
								?>
								<?php
								}
								?>	
	    			<?php 
						}
					}
					else {
					?>
					<!-- No Comments -->
					<td><?php echo "No Comment"; ?></td>
			        <?php
					}
			    	?>
				<?php
               	}
                ?>
        	</div>
        </div>
<?php 

?>


