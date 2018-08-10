<?php 

function content_controller() {
	if (isset($_GET['profile'])) {
		include "layout/profile_layout.php";
	}
	elseif (isset($_GET["search"]) && isset($_GET["collections"])) {
		include "serviceForAjax/searchCollections_layout.php";
	}
	elseif (isset($_GET["search"]) && isset($_GET["blog"])) {
		include "serviceForAjax/searchBlog_layout.php";
	}
	elseif (isset($_GET["collections"])) {
		include "layout/collections_layout.php";
	}
	elseif (isset($_GET["blog"])) {
		include "layout/blog_layout.php";
	}
	elseif (isset($_GET["contact"])) {
		include "layout/contact_layout.php";
	}
	elseif (isset($_GET["signin"])) {
		include "layout/signIn_layout.php";
	}
	elseif (isset($_GET["signup"])) {
		include "layout/signUp_layout.php";
	}
	elseif (isset($_GET["blogDetail"])) {
		include "layout/blogDetail_layout.php";
	}
	elseif (isset($_GET["collectionsDetail"])) {
		include "layout/collectionsDetail_layout.php";
	}
	elseif (isset($_GET["shoppingCart"])) {
		include "layout/shoppingCart_layout.php";
	}
	elseif (isset($_GET["checkOut"])) {
		include "layout/checkOut_layout.php";
	}
	elseif (isset($_GET["thankYou"])) {
		include "layout/thankYou_layout.php";
	}
	elseif (isset($_GET["contactThank"])) {
		include "layout/contactThank_layout.php";
	}
	else {
		include ("layout/home_layout.php");
	}
}

?>