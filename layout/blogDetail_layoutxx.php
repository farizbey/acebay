<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Detail</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> <!-- iCon -->
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- iCon -->

		<!-- bootstrap css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- <link href="css/jquery.bxslider.css" rel="stylesheet"> -->

		<!-- font awesome css-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		
		<!-- Own CSS -->
		<link href="../css/style/mystyle.css" rel="stylesheet">
		<link href="../css/style/contentstyle.css" rel="stylesheet">
		<link href="../css/style/gallerystyle.css" rel="stylesheet">
		<link href="../css/style/contactstyle.css" rel="stylesheet">

		<!-- Custom CSS -->
    	<!-- <link href="css/style/half-slider.css" rel="stylesheet"> -->
</head>
<body>

	<div class ="bg-white">
		<div class="container bg-grey">
			<div class="row">
				<div class="col-xs-6 logo"></div>
				<div class="col-xs-6 banner"></div>
			</div>
			<nav class="nav navbar-default navbar-kolor"> 
		  		<div class="container-fluid">
				    <div class="navbar-header"> 
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					        <span class="sr-only">Toggle navigation</span> 
					        <span class="icon-bar"></span> <!-- icon-bar boat strip 3 kalau dikecilin -->
					        <span class="icon-bar"></span> 
					        <span class="icon-bar"></span> 
				      	</button>
				      	<a class="navbar-brand" href="index.php"><i class="fa fa-home fa-lg ic-kolor" aria-hidden="true"></i></a> 
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
				       	<ul class="nav navbar-nav navbar-right navbar-text-kolor"> 
					        <li><a href="profile.php">Profile</a></li>
					        <li><a href="portfolio.php">Portfolio</a></li>
					        <li><a href="blogs.php">Blog</a></li> 
					        <li><a href="contact.php">Contact</a></li> 
					        <li class="dropdown"> 
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg" aria-hidden="true"></i><span class="caret"></span></a> 
				          			<ul class="dropdown-menu drop-kolor" role="menu"> 
				            			<li><a href="signIn.php">Log In</a></li> 
							            <li><a href="signUp.php">Sign Up</a></li>
				          			</ul> 
				        	</li> 
				      </ul>  
		    		</div>
				</div>
	    	</nav> <!-- End of nav tag -->

			<div class="col-md-6 col-md-offset-3">
			    <form class="" role="search">
			        <div class="col-xs-9">
			        	<input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-danger"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
			    </form> <!-- End of Form Search -->
			</div>

			<!-- Blog Content -->
			<content>
				<div class="row">

					<div class="col-md-12">
						<div class="media">
							<h4 class="media-heading">Middle aligned media</h4>
		  					<div class="media-top media-middle">
		    					<a href="#">
		      						<img class="media-object" src="../images/bannerAzure.png" alt="...">
		    					</a>
		  					</div>
		  					<div class="media-body">
		  						<p><?php //something for the date ?></p>
		    					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.
		    					<br></br>
								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
								<br></br>
								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.</p>
		  					</div>
						</div>

					</div>

				</div> <!-- End of Row Content -->
			</content>

		</div> <!-- End of container bg-grey -->

		<div class="clearfix"></div>
		<!-- Footer -->
		<footer>
			<div class="col-md-12">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h5>Follow Me:</h5>
								<div class="">
	                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-google-plus-square google fa-2x"></i></a> 
	                            </div>

							</div>
						</div>

						<div class="col-md-4">
							<div class="widget">
								<h5>Copyright &copy Fariz Rakhman Bey</h5>
							</div>
						</div>

						<!-- <div class="col-md-4">
							<div class="widget">
								<h5>Copyright &copy Fariz Rakhman Bey</h5>
							</div>
						</div> -->
					</div>
				</div>
			</div> <!-- End of Footer -->
		</footer>
	</div> <!-- End of Wrapper White -->





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script src="https://use.fontawesome.com/97dc384b71.js"></script>


</body>
</html>


<?php 

?>
