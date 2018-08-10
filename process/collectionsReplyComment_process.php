<?php

include "../classes/database3.php";
include "../php/functions.php";

$db = new Database();

if (!empty($_POST['new_reply'])) {
	$collections_id = $_POST['collections_id'];
	$comment_sender_email = $_POST['account'];
	$comment = $_POST['new-reply'];
	$code = $_POST['code'];
	//$ip_address = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	
	$data = array("comment_collections_id"=> $collections_id ,
				  	"child_collections_comment_sender_email"=> $comment_sender_email ,
				  	"child_collections_comment"=> $comment ,
				  	"par_code"=> $code ,
				  	"child_ip_address"=> $ip_address ,
				  	"create_date"=>"NOW()");
	//print_r($data);
	
	$result = $db->insert('child_collections_comment_tbl', $data, array('sssss'));


	if ($result)
	{
		header("location:../index.php?collectionsDetail&collections_id=$collections_id");

	}
	else
	{
		echo "comment Erorr";
	}
}

?>
