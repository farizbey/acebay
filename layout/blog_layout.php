<?php

?>
<!-- Blog Content -->
<div class="row">
	<div class="col-md-12">
		<p>Latest News</p>
		<?php 
		$db = new Database();
		$sql = "SELECT * FROM blogs_tbl ORDER BY create_date DESC";

		// Get the total number of rows
		$num_rows = $db->num_rows($sql);

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

		// make condition that page is not lower than 1 and not higher than the last page

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
			$centerPage .= '<li class="active"><a href="index.php?blog&page='. $page .'">' . $page . '</a></li>';
			$centerPage .= '<li><a href="index.php?blog&page='. $add1 .'">' . $add1 . '</a></li>';
		} else if ($page == $lastPage) {
			$centerPage .= '<li><a href="index.php?blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
			$centerPage .= '<li class="active"><a href="index.php?blog&page='. $page .'">' . $page . '</a></li>';
		} else if ($page > 2 && $page <($lastPage - 1)) {
			$centerPage .= '<li><a href="index.php?blog&page='. $sub2 .'">' . $sub2 . '</a></li>';
			$centerPage .= '<li><a href="index.php?blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
			$centerPage .= '<li class="active"><a href="index.php?blog&page='. $page .'">' . $page . '</a></li>';
			$centerPage .= '<li><a href="index.php?blog&page='. $add1 .'">' . $add1 . '</a></li>';
			$centerPage .= '<li><a href="index.php?blog&page='. $add2 .'">' . $add2 . '</a></li>';
		} else if ($page > 1 && $page < $lastPage) {
			$centerPage .= '<li><a href="index.php?blog&page='. $sub1 .'">' . $sub1 . '</a></li>';
			$centerPage .= '<li class="active"><a href="index.php?blog&page='. $page .'">' . $page . '</a></li>';
			$centerPage .= '<li><a href="index.php?blog&page='. $add1 .'">' . $add1 . '</a></li>';
		}

		// Set The LIMIT query

		$limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;

		$sql2 = "SELECT * FROM blogs_tbl ORDER BY create_date DESC $limit";

		$results = $db->query($sql2);
		foreach ($results as $value) {
		?>
			<div class="media">
					<div class="media-left media-middle">
					<a href="index.php?blogDetail&blog_id=<?php echo $value->blog_id?>">
							<img class="media-object" src="images/<?php echo $value->blog_image_thumb; ?>" alt="...">
					</a>
					</div>
					<div class="media-body">
						<p><?php echo $value->create_date; ?></p>
						<a href="index.php?blogDetail&blog_id=<?php echo $value->blog_id?>">
					<h4 class="media-heading"><?php echo $value->blog_title; ?></h4>
					</a>
					<p class="text"><?php echo $value->blog_details_preview; ?></p>
					</div>
			</div>
		<?php 
		}
		?>
	</div>
</div> <!-- End of Row Content -->

		<!-- Pagination -->
		<?php 
		//  Initialize Pagination Output
		$paginationDisplay = "";

		if ($lastPage != 1) {
			$showPage= 'Page ' . $page . ' of ' . $lastPage;
			
			if ($page != 1) {
				$previous = $page - 1;
				$paginationDisplay .= '<li>
		      		<a href="index.php?blog&page='. $previous .'" aria-label="Previous">
		        		<span aria-hidden="true">&laquo;</span>
		      		</a>
		    	</li>';
			}

			$paginationDisplay .= $centerPage;
			
			if ($page != $lastPage) {
				$nextPage = $page + 1;
				$paginationDisplay .= '<li>
		      		<a href="index.php?blog&page='. $nextPage .'" aria-label="Next">
		        		<span aria-hidden="true">&raquo;</span>
		      		</a>
		    	</li>';
			}		
		}
		?>
		<nav class="text-center">
			<ul class="pagination">
			<?php 
			echo $paginationDisplay;
			?>
		 	</ul>
		 	</ul>
		</nav>
		<!-- End of Pagination -->
	</div> <!-- End of container bg-grey -->
<?php 

?>
