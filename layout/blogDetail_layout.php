<?php
if (isset($_GET["blog_id"])) {
	if ($_GET["blog_id"] != "" && is_numeric($_GET["blog_id"])) {
		
		$db = new Database();

		$blog_id = $_GET["blog_id"];
		$data = array("blog_id"=> $blog_id);
		$sql = "SELECT * FROM blogs_tbl WHERE blog_id = ?";

		$result = $db->select($sql, $data, array('s'));

		// echo var_dump($result);
?>
		<!-- Blog Detail Content -->
		<div class="row">
			<div class="col-md-12" style="padding-top: 20px;">
				<div class="media">
					<h4 class="media-heading"><?php echo $result->blog_title; ?></h4>
  					<div class="media-top media-middle">
      					<img class="media-object img-responsive" src="images/<?php echo $result->blog_image_large; ?>" alt="...">
  					</div>
  					<div class="media-body">
  						<p><?php echo $result->create_date; ?></p>
    					<p class="text"><?php echo $result->blog_details_full; ?></p>
  					</div>
				</div>
			</div>
		</div>
		<!-- End of Blog Content -->
<?php
	}

}
?>
		<!-- Comment -->
		<div class="row">
			<div class="center-block col-md-12 col-lg-12 col-sm-12">
				<!-- Form Start -->
	            <form class="form-horizontal" method="post" action="process/blogComment_process.php">
					<div class="form-group">
						<h3 class="text-center">Post Comment</h3>
							<textarea class="form-control" rows="3" id="comment" style="resize: vertical" name="comment" placeholder="Leave Your Comment Here..." required></textarea>
					</div>
					<input type="hidden" value="<?php echo $_GET['blog_id']; ?>" name="blog_id" />
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
	            if (isset($_GET["blog_id"])) {
	            	$blog_id = $_GET["blog_id"];              
	                $sql2 = $db->query("SELECT * FROM comment_tbl WHERE comment_blog_id = $blog_id ORDER BY create_date DESC");
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
							<!-- End of Parrent Comment -->
							<?php
							$sql3 = "SELECT * FROM child_comment_tbl WHERE par_code = '$code' ORDER BY create_date DESC";
							$chi_count = $db->num_rows($sql3);
							$chi_result = $db->query($sql3);		
							?>
							<!-- Start of Reply and Replies Button -->
							<p class="text-right" style="cursor:pointer;">
								<a class="reply_comment" id="reply_comment" name="<?php echo $key->code; ?>" blogid="<?php echo $_GET['blog_id']; ?>" account="<?php if (!empty($_SESSION['member_email']) || (isset($_SESSION['member_email']))) {
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
									    <h3 class="panel-title pull-left"><?php echo $child->child_comment_sender_email; ?></h3>
									    <h5 class="panel-title pull-right"><?php echo $date2; ?></h5>
									    <div class="clearfix"></div>
								  	</div>
								  	<div class="panel-body">
									    <?php echo $child->child_comment; ?>				  	
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
        </div> <!-- End of div Row -->
			

			

<?php 

?>
