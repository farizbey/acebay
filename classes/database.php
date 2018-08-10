<?php 

/**
* 
*/
class Database
{
	private $db_connection;
	
	function __construct($root = false)
	{
		$root_dot = "";

		if ($root == true) {
			$root_dot = "../";
		}
		else {
			$root_dot = "";
		}

		include ($root_dot . "config/database_config.php");
		$this->db_connection = new mysqli($db_server, $db_user, $db_password, $db_selected);
	}

	// function queryall($sql="")
	// {
	// 	$result = new stdClass();
	// 	$rows = new stdClass();
	// 	if ($sql!="") {
	// 		$query = $this->db_connection->query($sql);
	// 		$rows = $query->fetch_object();
	// 		// if (!empty($rows)) {
	// 		// 	do {
	// 		// 		$result = $rows;
	// 		// 	}
	// 		// 	while($rows = $query->fetch_object());
	// 		// }			
	// 	}
	// 	return $rows;
	// }


	function queryall($sql="")
	{
		$result = array();
		if ($sql!="") {
			$query = $this->db_connection->query($sql);
			$rows = $query->fetch_object();
			if (!empty($rows)) {
				do {
					$result[]=$rows;
				}
				while($rows = $query->fetch_object());
			}
			$query->free();
		}
		return $result;
	}

	function query($sql="")
	{	
		$result = NULL;
		if ($sql!="") {
			$query = $this->db_connection->query($sql);
			$result = $query->fetch_object();
			$query->free();
		}
		return $result;
	}

	function insert($table, $data, $format) {
		// Check for $table or $data not set
		if ( empty( $table ) || empty( $data ) ) {
			return false;
		}
		
		// Connect to the database
		$db = $this->db_connection;
		
		// Cast $data and $format to arrays
		$data = (array) $data;
		$format = (array) $format;
		
		// Build format string
		$format = implode('', $format); 
		$format = str_replace('%', '', $format);
		
		list( $fields, $placeholders, $values ) = $this->prep_query($data);
		
		// Prepend $format onto $values
		array_unshift($values, $format); 
		// Prepary our query for binding
		$stmt = $db->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})");
		// Dynamically bind values
		call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($values));
		
		// Execute the query
		$stmt->execute();
		
		// Check for successful insertion
		if ( $stmt->affected_rows ) {
			return true;
		}
		
		return false;
	}

	function prep_query($data, $type='insert') {
		// Instantiate $fields and $placeholders for looping
		$fields = '';
		$placeholders = '';
		$values = array();
		
		// Loop through $data and build $fields, $placeholders, and $values			
		foreach ( $data as $field => $value ) {
			$fields .= "{$field},";
			$values[] = $value;
			
			if ( $type == 'update') {
				$placeholders .= $field . '=?,';
			} else {
				$placeholders .= '?,';
			}
			
		}
		
		// Normalize $fields and $placeholders for inserting
		$fields = substr($fields, 0, -1);
		$placeholders = substr($placeholders, 0, -1);
		
		return array( $fields, $placeholders, $values );
	}
		
	function ref_values($array) {
		$refs = array();
		foreach ($array as $key => $value) {
			$refs[$key] = &$array[$key]; 
		}
		return $refs; 
	}
}


?>