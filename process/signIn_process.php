<?php 

ob_start();
session_start();
ob_end_clean();

include "../classes/database3.php";



if (isset($_POST["email"]) && isset($_POST["password"])) 
{
	$db = new Database();

	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	$data = array("member_email"=> $email , "member_password"=> $password);

	$sql = "SELECT member_id, first_name, last_name, member_email, member_password FROM member_tbl WHERE member_email = ? AND member_password = ?";

	$result = $db->select($sql, $data, array('ss'));
   	
    // echo var_dump($result);

    // echo $result->last_name;

    if (!empty($result)) {
		$_SESSION['first_name'] = $result->first_name;
		$_SESSION['last_name'] = $result->last_name;
		$_SESSION['member_id'] = $result->member_id;
		$_SESSION['member_email'] = $result->member_email;
    }
    else {
    	echo "login Failed";
    }

    // echo $_SESSION["first_name"];
    header("location:../index.php?home");


}


	
	// $sql = "SELECT member_id, first_name, last_name, member_email, member_password
	// 		FROM member_tbl WHERE member_email='" . $_POST["email"] . "'
	// 		AND member_password='" .  md5($_POST["password"]) . "'";
	// echo $sql;
	
	// $users = $db->prepare("SELECT  member_id, first_name, last_name, member_email, member_password FROM member_tbl WHERE member_email = ? AND member_password = ?");

	// $users = $db->prepare("SELECT email, first_name, last_name FROM users WHERE first_name = ?");
?>