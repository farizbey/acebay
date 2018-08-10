<?php 

include "../classes/utility.php";
include "../classes/database3.php";
include "../classes/shoppingCart.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>cart ajax</title>
</head>
<body>
	<?php 

		// $_SESSION['cart'] = array();
		// $_SESSION['cart'] = [0 => 'cumi', 1 => 'roti'];
		// echo count($_SESSION["cart"]);
		// echo '<br>';
		// var_dump($_SESSION['cart']);


		// $tshirt_id = 1;
		// $result = false;
		// if ($tshirt_id > 0) 
		// {
		// 	# code...
		// 	for ($i=0; $i <=count($_SESSION["cart"])-1 ; $i++) 
		// 	{ 
		// 		# code...
		// 		if ($_SESSION["cart"][$i]["tshirt_id"] == $tshirt_id) 
		// 		{
		// 			# code...
		// 			$result = true;
		// 			echo $result;
		// 			break;	
		// 		}
		// 	}
		// }
		// return $result;
		// echo '<br>';
		// var_dump($result);
		// for ($x = 0; $x <= 1; $x++) {
		//   echo "The number is: $x <br>";
		// }

		// $a = array("1"); 

		// var_dump($a);

		// $cart = new shoppingcart();
		$_SESSION['cart'] = [0=>'cumi'];

		// if (empty($_SESSION['cart'])) {
		// 	echo 'yes';
		// }
		// else {
		// 	echo "no";
		// }


		$utility_obj = new utility();
		if ($utility_obj->isarrayempty($_SESSION['cart'])) {
			var_dump($_SESSION['cart']);
			echo 'Yes';
		}
		else {
			var_dump($_SESSION['cart']);
			echo "No";
		}
		

	?>
</body>
</html>