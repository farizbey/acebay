<?php

include "../classes/database3.php";
include "../php/functions.php";

$db = new Database();

if (!empty($_POST)) {
	$blog_id = $_POST['blog_id'];
	$comment_sender_email = $_POST['member_email'];
	$comment = $_POST['comment'];
	$code = generateRandomString();
	//$ip_address = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	
	$data = array("comment_blog_id"=> $blog_id ,
				  	"comment_sender_email"=> $comment_sender_email ,
				  	"comment"=> $comment ,
				  	"code"=> $code ,
				  	"ip_address"=> $ip_address ,
				  	"create_date"=>"NOW()");
	//print_r($data);
	
	$result = $db->insert('comment_tbl', $data, array('sssss'));


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
