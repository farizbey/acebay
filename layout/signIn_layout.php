<?php

?>
<!-- Sign In -->
<logIn>
	<div class="col-lg-12 col-md-12">
    	<h3>Sign In</h3>
        <form class="form-horizontal" method="post" action="process/signIn_process.php">
			<div class="form-group">
				<label for="inputEmail" class="col-sm-2">Email address</label>
				<div class="col-sm-6">
					<input type="email" name="email" class="form-control" id="" placeholder="Email" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2">Password</label>
				<div class="col-sm-6">
					<input type="password" name="password" class="form-control" id="" placeholder="Password" required />
				</div>
			</div>
			<div class="col-md-6 col-md-offset-6 col-xs-12">
				<input class="btn btn-default" type="submit" value="Sign In"/>
			</div>
        </form>
    </div>
</logIn> <!-- End of Sign In -->
<?php 

?>
