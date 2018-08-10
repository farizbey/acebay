<?php


?>
<!-- Contact -->
<contact>
    <h3>Contact</h3>
    <div class="">
        <form class="form-horizontal" method="post" action="process/saveContact_process.php">
    	 	<div class="form-group">
				<label for="inputName" class="col-sm-2">Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="col-sm-2">Email address</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputSubject" class="col-sm-2">Subject</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject" name="subject" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputMessage" class="col-sm-2">Message</label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="comment" placeholder="Messages" style="resize: vertical" name="message" required></textarea>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-6 col-xs-12">
				<input class="btn btn-default" type="submit" value="Submit"/>&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="btn btn-default" type ="reset" value="Reset"/>
			</div>
        </form>
    </div>
</contact> <!-- Contact -->
<?php 

?>
