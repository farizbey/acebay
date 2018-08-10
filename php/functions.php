<?php


function generateRandomString($length = 6) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$characterLength = strlen($characters);
	$randomString = '';
	for($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $characterLength - 1)];
	}
	return $randomString;
}

?>