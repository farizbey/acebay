<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Final Encounter</title>
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> --> <!-- iCon -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- iCon -->

	<!-- bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- <link href="css/jquery.bxslider.css" rel="stylesheet"> -->

	<!-- font awesome css-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <div class="form-group">  
        <div class="input-group">    
            <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Name" class="form-control" />
            <span class="input-group-addon btn-danger" id ="cumi" type="button">
            	<i class="fa fa-search fa-lg" aria-hidden="true"></i>
        	</span>
        <div>  
    </div> 
<!-- <form action="#" id="cumi" class="" role="search" method="GET">
		<div class="col-xs-9">
			<input type="text" class="form-control" placeholder="Search" value="<?php //echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" name="search" id="search_id" />
		</div>
		<span class="input-group-btn">
			<button class="btn btn-info btn-danger" type="button">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</span>
		<a href="" class="btn btn-danger"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
	</form> --> 

<!-- End of Form Search --> 

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://use.fontawesome.com/97dc384b71.js"></script>
<script type="text/javascript" language="javascript">


$(document).ready(function() {
	$("#search_text").on("keyup", function(e)
		{
			// if (e.which == 13) {
				// $("#cumi").click();
				var txt = $("#search_text").val();
				console.log(txt);
				//return false;
				// e.preventDefault();
			// }
		});
	$("#cumi").on("click", function(e)
	{
		// if (e.which == 13) {
			// $("#cumi").click();
			var txt = $("#search_text").val();
			console.log(txt);
			//return false;
			// e.preventDefault();
		// }
	});
});

// $(document).ready(function() {
    
//      //---------- Start searchHome ----------

//      $("a.btn-danger").click(function()
//      {
//         //alert($(this).attr("tshirt-id")); //shoes-id merupakan attribute html yang kita buat
//         var txt = $(#search_id).val();
//         console.log(txt);
//         <?php 
//         if (isset($_GET['home']) || empty($_GET)) {
//         ?>
//             if (txt !="") {
//                 $.ajax
//                 ({
//                     type:"GET",
//                     url:"http://localhost/final_encounter/serviceforajax/searchHome_layout.php",
//                     // data:{search:txt},
//                     data:"search=" + $("#search_id").val(),
                    
//                     beforeSend: function()
//                     {
//                         //$("#preloader").fadeIn(1500);
//                     },
//                     success: function(data)
//                     {
//                         //$("#preloader").fadeOut(1500);
//                         $("#content").html(data);
//                         console.log('working');
//                     },
//                     error: function() {
//                         console.log("not working");
//                     }
//                 });
//             }
//         <?php
//         }
//         ?>

//      });

//  });

</script>
