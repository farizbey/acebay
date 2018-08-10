<?php

ob_start();
session_start();
ob_end_clean();

include "../classes/database3.php";

$db = new Database();

if (!empty($_POST)) {
	$contact_name = $_POST['name'];
	$contact_email = $_POST['email'];
	$contact_subject = $_POST['subject'];
	$contact_message = $_POST['message'];

	//$ip_address = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	
	$data = array("contact_name"=> $contact_name ,
				  	"contact_email"=> $contact_email ,
				  	"contact_subject"=> $contact_subject ,
				  	"contact_message"=> $contact_message ,
				  	"ip_address"=> $ip_address ,
				  	"create_date"=>"NOW()");
	//print_r($data);
	
	$result = $db->insert('contact_tbl', $data, array('sssss'));


	if ($result)
	{
		header("location:../index.php?contactThank");

	}
	else
	{
		echo "comment Error";
		exit;
	}
}

?>
