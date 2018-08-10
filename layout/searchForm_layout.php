			    <!-- <form action="" class="" id="searchForm" role="search" method="GET"> -->
			    <div class="form-group" id="searchForm" role="search" method="GET">  
			        <div class="input-group">
<!-- 			        	<input type="text" class="form-control" placeholder="Search" value="<?php //echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" name="search" id="search_id" /> -->
					<input type="text" name="search" id="search_id" placeholder="Search by Customer Name" class="form-control" id="search_id" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" />
			        <span class="input-group-addon danger" id ="searchButton" type="button">
			        	<i class="fa fa-search fa-lg" aria-hidden="true"></i>
			    	</span>

			        </div>
<!-- 			        <span class="input-group-btn">
				        <button class="btn btn-info btn-danger" type="button" id="searchButton">
				            <i class="fa fa-search fa-lg" aria-hidden="true"></i>
				        </button>
    				</span> -->
			       <!--  <a href="" class="btn btn-danger"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a> -->
<!-- 					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Name" class="form-control" />
			        <span class="input-group-addon btn-danger" id ="cumi" type="button">
			        	<i class="glyphicon glyphicon-search"></i>
			    	</span> -->
			    <!-- </form> --> <!-- End of Form Search -->
			    </div>