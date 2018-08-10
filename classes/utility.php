<?php

/**
* 
*/
//
class utility
{
	
	function isarrayempty($dataarray=NULL)
	{
		# code...
		//hasil keluaran dari method isarrayempty()
		$result = true;
		//apakah $dataarray != NULL
		if ($dataarray != NULL)
		{
			//Apakah array isinya lebih dari 0
			if (count($dataarray) > 0)
			{
				//Apakah array pada posisi index yang pertama ada ?


				if (empty($dataarray[0]))
				{
					$result = true;
				}
				else
				{
					$result = false;
				}
			}
		}
		return $result;
	}

	function gotopage($page="")
	{
		include "config/config.php";
		//echo $base_url . $page ;
		if ($page!= "") 
		{

			# code...
			echo "<script type ='text/javascript' language='javascript'>";
			
			/*if (isset($base_url)) {
			 echo "window.location.href='" . $base_url . $page . "';";
			}
			else {
			 echo "window.location.href='" . $page . "';";	
			}*/
			echo "window.location.href='" . $base_url . $page . "';";
			
			
			echo "</script>";
		}
	}

	function createoption($thevalue="", $thelabel="", $selected=false)
	{
		$selectedstr = "";
		if ($selected == true) 
		{
			# code...
			$selectedstr="selected";
		}

		$theoptions = "<option value='" . $thevalue . "' " . $selectedstr . ">";
		$theoptions = $theoptions . $thelabel . "</options>";

		return $theoptions;
	}
}

?>