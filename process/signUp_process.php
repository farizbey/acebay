<?php

ob_start();
session_start();
ob_end_clean();

include "../classes/database3.php";

$db = new Database();

if (!empty($_POST)) {

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$confirmPassword = $_POST['confirm_password'];
	//$create_date = date("Y-m-d H:i:s");

	$data = array("first_name"=> $firstName , 
				  	"last_name"=> $lastName , 
				  	"member_email"=> $email , 
				  	"member_password"=> $password ,
				  	"create_date"=>"NOW()");
	//print_r($data);
	
	$result = $db->insert('member_tbl', $data, array('ssss'));


	if ($result)
	{
		header("location:../index.php?home");

	}
	else
	{
		echo "Sign Up Unsucess";
	}
}

?>
