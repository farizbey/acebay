			<nav class="nav navbar-default navbar-kolor"> 
		  		<div class="container-fluid">
				    <div class="navbar-header"> 
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					        <span class="sr-only">Toggle navigation</span> 
					        <span class="icon-bar"></span> <!-- icon-bar boat strip 3 kalau dikecilin -->
					        <span class="icon-bar"></span> 
					        <span class="icon-bar"></span> 
				      	</button>
				      	<a class="navbar-brand" href="index.php?home"><i class="fa fa-home fa-lg ic-kolor" aria-hidden="true"></i></a> 
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
				       	<ul class="nav navbar-nav navbar-right navbar-text-kolor"> 
					        <li><a href="index.php?profile">Profile</a></li>
					        <li><a href="index.php?collections">Collections</a></li>
					        <li><a href="index.php?blog">Blog</a></li> 
					        <li><a href="index.php?contact">Contact</a></li> 
					  		
					  		<?php 
					  		if (isset($_SESSION["first_name"]) && ($_SESSION["last_name"])) {
					  		?>
					  		<li class="dropdown"> 
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION["first_name"]; ?><i class="fa fa-user fa-lg" aria-hidden="true"></i><span class="caret"></span></a> 
				          			<ul class="dropdown-menu drop-kolor" role="menu"> 
				            			<li><a href="process/signOut_process.php">Sign Out</a></li>
				          			</ul> 
				        	</li>
					  		<?php
					  		}

					  		else {
					  		?>
					  		<li class="dropdown"> 
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg" aria-hidden="true"></i><span class="caret"></span></a> 
				          			<ul class="dropdown-menu drop-kolor" role="menu"> 
				            			<li><a href="index.php?signin">Sign In</a></li> 
							            <li><a href="index.php?signup">Sign Up</a></li>
				          			</ul> 
				        	</li>
					  		<?php
					  		}
					  		?>
				      	</ul>  
		    		</div>
				</div>
	    	</nav> <!-- End of nav tag -->