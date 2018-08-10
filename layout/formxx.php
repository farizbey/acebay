			                <?php 

			                if (isset($_GET["blog_id"])) {
			                	$blog_id = $_GET["blog_id"];
				                


				                $sql = $db->query("SELECT * FROM comment_tbl WHERE comment_blog_id = $blog_id");

				                // $data = array("comment_blog_id"=> $blog_id);

				                // $result = $db->select($sql, $data, array('s'));
				                //echo var_dump($sql);
				                if (!empty($sql) && isset($sql) && $sql != NULL) {
												foreach ($sql as $key) {
				                ?>
				                <div class="col-md-12 comment_section">
				                	<div class="col-md-12 comment_head">
				                		<span class="col-md-4 comment_user">
				                		<?php echo $key->comment_sender_email; ?>
				                		</span>
				                		<span class="col-md-4 col-md-offset-4 comment_date">
				                		<?php echo $key->create_date; ?>
				                		</span>
				                	</div>
				                	<div class="col-md-12 comment_body">
				                	<?php echo $key->comment; ?>
				                	</div>
				                	<div class="col-md-12 comment_footer">

				                	</div>
				                </div>
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