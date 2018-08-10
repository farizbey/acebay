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
		$db = $this->connect();
		$result = $db->query($query);
		
		while ( $row = $result->fetch_object() ) {
			$results[] = $row;
		}
		
		return $results;
	}
	public function insert($table, $data, $format) {
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
		
		$fields = '';
		$placeholders = '';
		$values = array();
		
		// Loop through $data and build $fields, $placeholders, and $values			
		foreach ( $data as $field => $value ) {
			$fields .= "{$field},";
			$values[] = $value;
			$placeholders .= '?,';			
		}
		
		// Normalize $fields and $placeholders for inserting
		$fields = substr($fields, 0, -1);
		$placeholders = substr($placeholders, 0, -1);

		print_r($fields);
		print_r($placeholders);
		print_r($values);
		print_r($format);

		// Prepary our query for binding
		$stmt = $db->prepare("
			INSERT INTO member_tbl (first_name,last_name,member_email,member_password,create_date) 
			VALUES (?,?,?,?,?)");
		
		// $refs = array();
		// foreach ($values as $key => $value) {
		// 	$refs[$key] = &$values[$key]; 
		// }
		//print_r($stmt->error_list);
		$stmt->bind_param($format, $firstName = 'falisha', $lastName = 'bey', $email = 'falisha@falisha.com', $password = '52a83b796771f4434bcfec88ef8e062d', $date = '2016-08-19 12:32:52');
		
		// Execute the query
		$stmt->execute();



		
		// Check for successful insertion
		if ( $stmt->affected_rows ) {
			return true;
		}
		
		return false;
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
		$placeholders = substr($placeholders, 0, -1);

		//print_r($fields);
		//print_r($placeholders);
		//print_r($values);

		echo '<pre>', print_r($fields), '</pre>';
		echo '<pre>', print_r($placeholders), '</pre>';
		echo '<pre>', print_r($values), '</pre>';
		
		return array( $fields, $placeholders, $values );


	}
	// private function ref_values($array) {
	// 	$refs = array();
	// 	foreach ($array as $key => $value) {
	// 		$refs[$key] = &$array[$key]; 
	// 	}
	// 	return $refs; 
	// }

}

?>