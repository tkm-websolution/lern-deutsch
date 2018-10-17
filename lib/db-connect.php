<?php 
function connect(){
		
		$config = ["DB_USERNAME" => "root", "DB_PASSWORD" => "ingia", "DB_NAME" => "lernDeutsch"];

	try {
		$conn = new PDO('mysql:host=localhost;dbname=' . 
						$config['DB_NAME'],
						$config['DB_USERNAME'],
						$config['DB_PASSWORD']);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn;

	} catch (Exception $e) {
		print_r($e);
		die("Could not connect.");
	}
}

function queryDB($stmt, $conn)
{
		
		// return $stmt;

	$statement = $conn->prepare($stmt);

	$statement->execute();


	
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	
}
 ?>