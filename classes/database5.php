<?php 

class Database {
	public function __construct($user = 'root', $password = '', $database = 'farizbey_personalwebdb', $host = 'localhost') {
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		$this->host = $host;
	}
	protected function connect() {
		return new mysqli($this->host, $this->user, $this->password, $this->database);
	}
	public function query($query) {
		$results = array();
		$db = $this->connect();
		$result = $db->query($query);
		$rows = $result->fetch_object();
		if (!empty($rows)) {
			do {
				$results[]=$rows;
			}
			while($rows = $result->fetch_object());
		}
		$result->free();
				
		// while ( $row = $result->fetch_object() ) {
		// 	$results[] = $row;
		// }
		
		return $results;
	}


	function queryone($sql="")
	{	
		$db = $this->connect();
		$result = NULL;
		if ($sql!="") {
			$query = $db->query($sql);
			$result = $query->fetch_object();
			$query->free();
		}
		return $result;
	}

	public function insert($table, $data, $format) {
		$result = 0;
		// Check for $table or $data not set
		if ( empty( $table ) || empty( $data ) ) {
			return false;
		}
		
		// Connect to the database
		$db = $this->connect();
		
		// Cast $data and $format to arrays
		$data = (array) $data;
		$format = (array) $format;
		
		// Build format string
		$format = implode('', $format); 
		$format = str_replace('%', '', $format);
		
		list( $fields, $placeholders, $values ) = $this->prep_query($data);
		
		// Prepend $format onto $values
		array_unshift($values, $format);
		
		// print_r($values);
		// print_r($format);
		// print_r($fields);
		// print_r($placeholders);

		// Prepary our query for binding
		if (strpos($fields, 'create_date') !== false) {
			$stmt = $db->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$placeholders} NOW())");
		}
		else {
			$stmt = $db->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})");
		}
				
		// Dynamically bind values
		call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($values));
		
		// Execute the query
		$stmt->execute();
		
		//insert id auto increment of previous updated query
		$result = $stmt->insert_id;

		// Check for successful insertion
		if ( $stmt->affected_rows ) {
			return $result;
		}
		
		return false;
	}

	public function select($query, $data, $format) {
			// Connect to the database
			$db = $this->connect();
			
			//Prepare our query for binding
			$stmt = $db->prepare($query);
			
			//echo var_dump($stmt);

			//Normalize format
			$format = implode('', $format); 
			$format = str_replace('%', '', $format);
			
			// Prepend $format onto $values
			array_unshift($data, $format);
			
			//Dynamically bind values
			call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($data));
			
			//Execute the query
			$stmt->execute();
			
			//Fetch results
			$result = $stmt->get_result();
			
			$results = $result->fetch_object();

			//echo var_dump($results);
			
			// $results = array();
			// //Create results object
			// while ($row = $result->fetch_object()) {
			// 	$results[] = $row;
			// }
			return $results;

		}

	public function num_rows($sql="")
	{
		$db= $this->connect();
		$result = 0;
		if ($sql!="") {
			$query = $db->query($sql);
			// var_dump($query);
			$result = $query->num_rows;
			$query->free();
		}
		return $result;
	}

	private function prep_query($data, $type='insert') {
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
		
		if (strpos($fields, 'create_date') !== false) {
			$placeholders = substr($placeholders, 0, -2);
			unset($values[count($values)-1]);
		}
		else {
			$placeholders = substr($placeholders, 0, -1);
		}

		// print_r($fields);
		// print_r($placeholders);
		// print_r($values);

		// echo '<pre>', print_r($fields), '</pre>';
		// echo '<pre>', print_r($placeholders), '</pre>';
		// echo '<pre>', print_r($values), '</pre>';
		
		return array( $fields, $placeholders, $values );


	}
	private function ref_values($array) {
		$refs = array();
		foreach ($array as $key => $value) {
			$refs[$key] = &$array[$key]; 
		}
		return $refs;
	}

}

?>