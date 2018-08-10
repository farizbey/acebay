<?php

/**
* 
*/
class shoppingCart
{
	
	function __construct()
	{
		# code...
		if (!isset($_SESSION["cart"])) 
		{
			# code...
			$_SESSION["cart"] = array();
		}
	}

	function checkCart($collections_id=0)
	{
		$result = false;
		if ($collections_id > 0) 
		{
			# code...
			for ($i=0; $i <=count($_SESSION["cart"])-1 ; $i++) 
			{ 
				# code...
				if ($_SESSION["cart"][$i]["collections_id"] == $collections_id) 
				{
					# code...
					$result = true;
					break;
				}
			}
		}
		return $result;

	}

	function changeQty($collections_id = 0, $qty = 0)
	{
		if ($collections_id > 0 && $qty > 0) {
			# code...
			for ($i=0; $i <=count($_SESSION["cart"])-1 ; $i++) 
			{ 
				# code...
				if ($_SESSION["cart"][$i]["collections_id"] == $collections_id) 
				{
					# code...
					$_SESSION["cart"][$i]["qty"] = $_SESSION["cart"][$i]["qty"]+$qty;
				}
			}
		}
	}

	function addToCart($collections_id = 0, $qty = 0)
	{
		if ($collections_id > 0 && $qty > 0) 
		{
			# code...
			if ($this->checkcart($collections_id) == true) 
			{
				# code...
				$this->changeqty($collections_id, $qty);
			}
			else
			{
				# code...
				$_SESSION["cart"][]=array("collections_id"=>$collections_id, "qty"=>$qty);	
			}
			
		}
	}

	function removeCart($collections_id=0)
	{
		if ($collections_id > 0)
		{
			for ($i=0; $i <=count($_SESSION["cart"])-1; $i++) 
			{ 
				# code...
				if ($_SESSION["cart"][$i]["collections_id"]==$collections_id)
				{
					array_splice($_SESSION["cart"], $i, 1);
					break;
				}
			}
		}
	}

	function editCart($collections_id=0, $qty=0)
	{
		if ($collections_id > 0 && $qty > 0) 
		{
			# code...
			for ($i=0; $i <=count($_SESSION["cart"])-1; $i++) 
			{ 
				# code...
				if ($_SESSION["cart"][$i]["collections_id"]==$collections_id) 
				{
					# code...
					$_SESSION["cart"][$i]["qty"]=$qty;
					break;
				}
			}
		}
	}

	function getTotalQty()
	{
		$total = 0;

		for ($i=0; $i<=count($_SESSION["cart"])-1; $i++) 
		{ 
			# code...
			$total = $total + $_SESSION["cart"][$i]["qty"];
		}
		return $total;
	}

	function clearCart()
	{
		$_SESSION["cart"]=array();
	}
}

?>