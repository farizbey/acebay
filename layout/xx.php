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
			<!-- Blog Content -->
			<content>
				<div class="row">

					<div class="col-md-12">
						<div class="media">
							<h4 class="media-heading"><?php echo $result->blog_title; ?></h4>
		  					<div class="media-top media-middle">

		      						<img class="media-object" src="images/<?php echo $result->blog_image_large; ?>" alt="...">

		  					</div>
		  					<div class="media-body">
		  						<p><?php echo $result->create_date; ?></p>
		    					<p class="text"><?php echo $result->blog_details_full; ?></p>
		  					</div>
						</div>

					</div>

				</div> <!-- End of Row Content -->
			</content>
<?php
	}

}

?>
					<div class="row">
  						<div class="center-block" style="width:500px;">
			                <form class="form-horizontal" method="post" action="process/blogComment_process.php">
								<div class="form-group">
									<h3 class="text-center">Post Comment</h3>
										<textarea class="form-control" rows="3" id="comment" style="resize: vertical" name="comment" placeholder="Leave Your Comment Here..."></textarea>
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
			                <div class="clearfix"></div>
			                <?php 

			                if (isset($_GET["blog_id"])) {
			                	$blog_id = $_GET["blog_id"];
				                


				                $sql2 = $db->query("SELECT * FROM comment_tbl WHERE comment_blog_id = $blog_id ORDER BY create_date DESC");

				                // $results = $db->num_rows($sql2);
				                // echo $results;

				                // $data = array("comment_blog_id"=> $blog_id);

				                // $result = $db->select($sql, $data, array('s'));
				                //echo var_dump($sql);
				                ?>
				                <?php
				                if (!empty($sql) && isset($sql) && $sql != NULL) {
									foreach ($sql2 as $key) {
										$date = new dateTime($key->create_date);
										$date = date_format($date, 'M j, Y | H:i:s');
										$code = $key->code;
										echo $code;
				                ?>
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


										<?php


										$data2 = array("par_code"=> $code);

										$sql3 = "SELECT * FROM child_comment_tbl WHERE par_code = ?";

										$chil_result = $db->select($sql3, $data2, array('s'));

										// var_dump($chil_result);
										
										// $sql4 = "SELECT COUNT(id) as count FROM child_comment_tbl";
										
										// $chil_result2 = $db->query($sql4);
										// echo $chil_result2->count;
										// $chil_result = $db->num_rows($sql4);
										// $chi_count = $db->num_rows($chil_result);

										$sql4 = "SELECT * FROM child_comment_tbl WHERE par_code = $code ORDER BY create_date DESC";
										//echo $sql4;
										$chil_result3 = $db->query($sql4);
										
										?>


										<p class="text-right"><a class="reply_comment" id="reply_comment" name="<?php echo $key->code; ?>" blogid="<?php echo $_GET['blog_id']; ?>" account="<?php if (!empty($_SESSION['member_email']) || (isset($_SESSION['member_email']))) {
	$comment_sender_email = $_SESSION['member_email'];
}
else {
	$comment_sender_email = "Anonymous";
} echo $comment_sender_email; ?>">Reply&nbsp;&nbsp;</a><a class="link-reply" id="reply-comment" name="<?php echo $key->code; ?>">Replies<i class="fa fa-angle-double-down fa-lg" aria-hidden="true">(<?php //echo $chi_count; ?>)</i></a></p>
										
										
				                			<?php 
						    					}
						    				}

											else {
												?>
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
