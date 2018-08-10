$(document).ready(function() {
	//$(".child-comments").hide();

	$(".children").click(function() {
		var section = $(this).attr("name");
		//var togTxt = $(".tog_text").text();
		$(".C-" + section).toggle();
	});

	$(".form-submit").click(function() {
		var commentBox = $("#comment");
		var commentCheck = commentBox.val();
		if(commentCheck == '' || commentCheck == NULL) {
			commentBox.addClass("form-text-error");
			return false;
		}
	});

	$(".form-reply").click(function() {
		var replyBox = $("#new-reply");
		var replyCheck = replyBox.val();
		if(replyCheck == '' || replyCheck == NULL) {
			replyBox.addClass("form-text-error");
			return false;
		}
	});

	$(".reply_comment").one("click", function() {
		var comCode = $(this).attr("name");
		var blogId = $(this).attr("blogid");
		var account = $(this).attr("account");
		var parent = $(this).parent();

		parent.append("<br /><form action='process/blogReplyComment_process.php' method='post'><textarea class='form-control' rows='3' name='new-reply' id='new-reply' required='required' style='resize: vertical' placeholder='Leave Your Reply Here...'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='hidden' name='blog_id' value='"+blogId+"' /><input type='hidden' name='account' value='"+account+"' /><input type='submit' class='btn btn-default' id='form-reply' name='new_reply' value='Reply' /></form>")
	});

	$(".collections_reply_comment").one("click", function() {
		var comCode = $(this).attr("name");
		var collectionsId = $(this).attr("collectionsId");
		var account = $(this).attr("account");
		var parent = $(this).parent();
		
		parent.append("<br /><form action='process/collectionsReplyComment_process.php' method='post'><textarea class='form-control' rows='3' name='new-reply' id='new-reply' required='required' style='resize: vertical' placeholder='Leave Your Reply Here...'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='hidden' name='collections_id' value='"+collectionsId+"' /><input type='hidden' name='account' value='"+account+"' /><input type='submit' class='btn btn-default' id='form-reply' name='new_reply' value='Reply' /></form>")
	});


})