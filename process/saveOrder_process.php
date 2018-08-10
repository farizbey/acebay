<?php

ob_start();
session_start();
ob_end_clean();

include "../classes/database3.php";

$db = new Database();

if (!empty($_POST)) {

	$memberId = $_POST['member_id'];
	$country = $_POST['country'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipCode = $_POST['zip_code'];
	$phoneNumber = $_POST['phone_number'];
	$email = $_POST['email_address'];
	$paymentType = $_POST['CreditCardType'];

	$data = array("customer_id"=> $memberId ,
					"country"=> $country ,
					"first_name"=> $firstName , 
				  	"last_name"=> $lastName ,
				  	"address"=> $address ,
				  	"city"=> $city ,
				  	"state"=> $state ,
				  	"zip_code"=> $zipCode ,
				  	"phone_number"=> $phoneNumber ,
				  	"email_address"=> $email ,
				  	"payment_type"=> $paymentType ,
				  	"create_date"=>"NOW()");
	
	$order_id = $db->insert('tr_order', $data, array('sssssssssss'));

	for ($i=0; $i<=count($_SESSION["cart"])-1; $i++) { 

		$sqlDetail = "SELECT collections_price FROM collections_tbl
					WHERE collections_id=" . $_SESSION["cart"][$i]["collections_id"];

		$collectionsRow = $db->queryone($sqlDetail);

		$subtotal = $collectionsRow->collections_price * $_SESSION["cart"][$i]["qty"];

		$dataDetail = array("order_id"=>$order_id,
					"collections_id"=>$_SESSION["cart"][$i]["collections_id"],
					"total_quantity"=>$_SESSION["cart"][$i]["qty"],
					"price"=>$collectionsRow->collections_price,
					"total_price"=>$subtotal);

		$result = $db->insert('tr_order_detail', $dataDetail, array('iiiii'));
	}


	if ($result) {
		// var_dump($order_id);
		unset($_SESSION["cart"]);
		header("location:../index.php?thankYou");
	}
	else {
		echo "Place Order Unsuccessful";
	}
}

?>
