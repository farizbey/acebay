<?php 

/**
 * 
 */
class Database
{
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
	public function select($query, $data, $format) {
			// Connect to the database
			$db = $this->connect();
			
			//Prepare our query for binding
			$stmt = $db->prepare($query);
			
			//echo var_dump($stmt);
			$data = (array) $data;
			$format = (array) $format;
			//Normalize format
			$format = implode('', $format); 
			$format = str_replace('%', '', $format);
			
			

			// // Prepend $format onto $values
			array_unshift($data, $format);
			// print_r($format);
			// print_r($data);
			
			$this->ref_values($data);
			print_r($data);
			$stmt->bind_param($format, $data);
			
			//Dynamically bind values
			// call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($data));
			
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
		private function ref_values($array) {
		$refs = array();
		foreach ($array as $key => $value) {
			$refs[$key] = &$array[$key];
			print_r($refs);
		}
		return $refs;
	}
}

?>