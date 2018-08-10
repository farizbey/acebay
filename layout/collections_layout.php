<?php


?>
<!-- Content Portfolio Starts -->
<section class="portfolio">
	<p>My Collections</p>
	<?php 
	$db = new Database();
	$sql = "SELECT * FROM collections_tbl ORDER BY create_date DESC";

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
		$centerPage .= '<li class="active"><a href="index.php?collections&page='. $page .'">' . $page . '</a></li>';
		$centerPage .= '<li><a href="index.php?collections&page='. $add1 .'">' . $add1 . '</a></li>';
	} else if ($page == $lastPage) {
		$centerPage .= '<li><a href="index.php?collections&page='. $sub1 .'">' . $sub1 . '</a></li>';
		$centerPage .= '<li class="active"><a href="index.php?collections&page='. $page .'">' . $page . '</a></li>';
	} else if ($page > 2 && $page <($lastPage - 1)) {
		$centerPage .= '<li><a href="index.php?collections&page='. $sub2 .'">' . $sub2 . '</a></li>';
		$centerPage .= '<li><a href="index.php?collections&page='. $sub1 .'">' . $sub1 . '</a></li>';
		$centerPage .= '<li class="active"><a href="index.php?collections&page='. $page .'">' . $page . '</a></li>';
		$centerPage .= '<li><a href="index.php?collections&page='. $add1 .'">' . $add1 . '</a></li>';
		$centerPage .= '<li><a href="index.php?collections&page='. $add2 .'">' . $add2 . '</a></li>';
	} else if ($page > 1 && $page < $lastPage) {
		$centerPage .= '<li><a href="index.php?collections&page='. $sub1 .'">' . $sub1 . '</a></li>';
		$centerPage .= '<li class="active"><a href="index.php?collections&page='. $page .'">' . $page . '</a></li>';
		$centerPage .= '<li><a href="index.php?collections&page='. $add1 .'">' . $add1 . '</a></li>';
	}

	// Set The LIMIT query

	$limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;

	$sql2 = "SELECT * FROM collections_tbl ORDER BY create_date DESC $limit";
	



	$results = $db->query($sql2);
	foreach ($results as $value) {
	?>
		<div class="col-sm-3 col-md-3 text-center">
	    	<div class="thumbnail">
	      		<img src="images/<?php echo $value->image_name_thumb; ?>" alt="..."/>
	      		<div class="caption">
	        		<a href="index.php?collectionsDetail&collections_id=<?php echo $value->collections_id?>"><h3><?php echo $value->collections_title; ?></h3></a>
	        		<p><?php echo $value->collections_descriptions; ?></p>
	        		<p><a href="#" class="btn btn-primary" role="button">Rp. <?php echo $value->collections_price; ?></a> <a href="javascript:" collections_id="<?php echo $value->collections_id; ?>" class="btn btn-default" role="button">Add To Cart</a></p>
	      		</div>
	    	</div>
	  	</div>
  	<?php 
  	}
  	?>
</section> <!-- End of portfolio content -->

<div class="clearfix"></div>

<!-- Pagination --> <!-- test cumi -->
<?php 

//  Initialize Pagination Output
$paginationDisplay = "";

if ($lastPage != 1) {
	$showPage= 'Page ' . $page . ' of ' . $lastPage;
	
	if ($page != 1) {
		$previous = $page - 1;
		$paginationDisplay .= '<li>
      		<a href="index.php?collections&page='. $previous .'" aria-label="Previous">
        		<span aria-hidden="true">&laquo;</span>
      		</a>
    	</li>';
	}

	$paginationDisplay .= $centerPage;
	
	if ($page != $lastPage) {
		$nextPage = $page + 1;
		$paginationDisplay .= '<li>
      		<a href="index.php?collections&page='. $nextPage .'" aria-label="Next">
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
</nav>
<!-- End of Pagination -->
