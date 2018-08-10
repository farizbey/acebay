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
			                <?php 

			                if (isset($_GET["blog_id"])) {
			                	$blog_id = $_GET["blog_id"];
				                


				                $sql = $db->query("SELECT * FROM comment_tbl WHERE comment_blog_id = $blog_id");

				                // $data = array("comment_blog_id"=> $blog_id);

				                // $result = $db->select($sql, $data, array('s'));
				                //echo var_dump($sql);
				                ?>
					            	<table class="table table-bordered table-striped">
										<tbody>
											<?php 
							                if (!empty($sql) && isset($sql) && $sql != NULL) {
												foreach ($sql as $key) {
											?> 
						    				<tr>
						      					<td><?php echo $key->comment_sender_email; ?></td>
						      					<td><?php echo $key->comment; ?></td>
						      					<td>
						      					<form class="form-horizontal" method="post" action="#">	
						      						<textarea class="form-control" rows="3" id="reply_comment" style="resize: vertical; display: none;" name="comment" placeholder="Leave Your Reply Here..">
						      						</textarea>
						      						<div style="float:right;">
						      						<input class="btn btn-default" type="submit" value="Reply" onclick="showDiv()" />
													<input class="btn btn-default" type="submit" value="Cancel" id="reply_cancel" style="display: none;" />
													</div>
						      					</form>
						      					</td>
						    				</tr>
						    				<?php 
						    					}
						    				}
											else {
												?>
							                	<td><?php echo "No Comment"; ?></td>
							                <?php
							                }
						    				?>
						  				</tbody>
									</table>
								<?php
			               }
			                ?>
			                
	                	</div>
	                </div>
			

			

<?php 

?>
