<?php

ob_start();
session_start();
ob_end_clean();

if(!class_exists('Database')) {
    require('../classes/database3.php');
}

$keyword = isset($_GET["search"]) ? $_GET['search'] : "";

?>
			<!-- Blog Content -->
			<content>
				<div class="row">
					<div class="col-md-12">
						<p>Latest News</p>
						<?php 
						$db = new Database();
						$sql = "SELECT * FROM blogs_tbl WHERE blog_title LIKE '%$keyword%' ORDER BY create_date DESC";

						// Get the total number of rows
						$num_rows = $db->num_rows($sql);
						// var_dump($num_rows);		

						if (isset($_GET['page'])) {
							$page = preg_replace('#[^0-9]#i', '', $_GET['page']); // Filter only numbers
						}
						else {
							$page = 1;
						}
						// items per page
						$perPage = 4; 
						// last page
						$lastPage = ceil($num_rows/$perPage);

						// make condition that page is no lower than 1 and no higher than the last page

						if ($page < 1) {
							$page = 1;
						} else if ($page > $lastPage) {
							$page = $lastPage;
						}


						//
						// Paging Logic
						//

						// intialize center page
						$centerPage = "";
						
						$sub1 = $page - 1;
						$sub2 = $page - 2;
						$add1 = $page + 1;
						$add2 = $page + 2;

						if ($page == 1) {
							$centerPage .= '<li class="active"><a href="index.php?search='. $keyword .'&blog&page='. $page .'">' . $page . '</a></li>';
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $add1 .'">' . $add1 . '</a></li>';
						} else if ($page == $lastPage) {
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
							$centerPage .= '<li class="active"><a href="index.php?search='. $keyword .'&blog&page='. $page .'">' . $page . '</a></li>';
						} else if ($page > 2 && $page <($lastPage - 1)) {
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $sub2 .'">' . $sub2 . '</a></li>';
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
							$centerPage .= '<li class="active"><a href="index.php?search='. $keyword .'&blog&page='. $page .'">' . $page . '</a></li>';
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $add1 .'">' . $add1 . '</a></li>';
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $add2 .'">' . $add2 . '</a></li>';
						} else if ($page > 1 && $page < $lastPage) {
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
							$centerPage .= '<li class="active"><a href="index.php?search='. $keyword .'&blog&page='. $page .'">' . $page . '</a></li>';
							$centerPage .= '<li><a href="index.php?search='. $keyword .'&blog&page='. $add1 .'">' . $add1 . '</a></li>';
						}

						// Set The LIMIT query

						$limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;

						$sql2 = "SELECT * FROM blogs_tbl WHERE blog_title LIKE '%$keyword%' ORDER BY create_date DESC $limit";
						
						// $num_rows2 = $db->num_rows($sql2);
						// var_dump($num_rows);
						if ($num_rows < 1) {
							echo "No Data";
						} else {

						$results = $db->query($sql2);
						foreach ($results as $value) {
						?>
						<div class="media">
		  					<div class="media-left media-middle">
		    					<a href="#">
		      						<img class="media-object" src="images/<?php echo $value->blog_image_thumb; ?>" alt="...">
		    					</a>
		  					</div>
		  					<div class="media-body">
		  						<p><?php echo $value->create_date; ?></p>
		  						<a href="#">
		    					<h4 class="media-heading"><?php echo $value->blog_title; ?></h4>
		    					</a>
		    					<p class="text"><?php echo $value->blog_details_preview; ?></p>
		  					</div>
						</div>
						<?php 
						}
						?>
						<?php
						}
						?>	

					</div>
				</div> <!-- End of Row Content -->
			</content>

			<!-- Pagination -->
			<?php 
			//  Initialize Pagination Output
			$paginationDisplay = "";

			if ($lastPage != 1) {
				$showPage= 'Page ' . $page . ' of ' . $lastPage;
				
				if ($page != 1) {
					$previous = $page - 1;
					$paginationDisplay .= '<li>
			      		<a href="index.php?search='. $keyword .'&blog&page='. $previous .'" aria-label="Previous">
			        		<span aria-hidden="true">&laquo;</span>
			      		</a>
			    	</li>';
				}

				$paginationDisplay .= $centerPage;
				
				if ($page != $lastPage) {
					$nextPage = $page + 1;
					$paginationDisplay .= '<li>
			      		<a href="index.php?search='. $keyword .'&blog&page='. $nextPage .'" aria-label="Next">
			        		<span aria-hidden="true">&raquo;</span>
			      		</a>
			    	</li>';
				}		
			}

			?>
			<nav class="text-center">
				<ul class="pagination">
				<?php
				if ($num_rows < 1) {
					echo "";
				} else {
					echo $paginationDisplay;
				}
				?>
			 	</ul>
			 	</ul>
			</nav>
			<!-- End of Pagination -->
		</div> <!-- End of container bg-grey -->

<?php 

?>
