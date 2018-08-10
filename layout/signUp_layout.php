<?php

?>
<!-- Sign Up-->
<logIn>
    <h3>Sign Up</h3>
    <div class="">
        <form class="form-horizontal" method="post" autocomplete="off" action="process/signUp_process.php">
        	<div class="form-group">
				<label for="inputText" class="col-sm-2">First Name</label>
				<div class="col-sm-6">
					<input type="text" name="first_name" class="form-control" id="" placeholder="First Name" required/>
				</div>
			</div>
			<div class="form-group">
				<label for="inputText" class="col-sm-2">Last Name</label>
				<div class="col-sm-6">
					<input type="text" name="last_name" class="form-control" id="" placeholder="Last Name" required/>
				</div>
			</div>
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
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2">Confirm Password</label>
				<div class="col-sm-6">
					<input type="password" name="confirm_password" class="form-control" id="" placeholder="Confirm Password" required/>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-6 col-xs-12">
				<input class="btn btn-default" type="submit" value="Sign Up"/>
			</div>
        </form>
    </div>
</logIn> <!-- End of Sign Up -->

<?php 

?>
