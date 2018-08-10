<?php

include "../classes/database3.php";
include "../php/functions.php";

$db = new Database();

if (!empty($_POST['new_reply'])) {
	$blog_id = $_POST['blog_id'];
	$comment_sender_email = $_POST['account'];
	$comment = $_POST['new-reply'];
	$code = $_POST['code'];
	//$ip_address = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	
	$data = array("comment_blog_id"=> $blog_id ,
				  	"child_comment_sender_email"=> $comment_sender_email ,
				  	"child_comment"=> $comment ,
				  	"par_code"=> $code ,
				  	"child_ip_address"=> $ip_address ,
				  	"create_date"=>"NOW()");
	//print_r($data);
	
	$result = $db->insert('child_comment_tbl', $data, array('sssss'));


	if ($result)
	{
		header("location:../index.php?blogDetail&blog_id=$blog_id");

	}
	else
	{
		echo "comment Erorr";
	}
}

?>
