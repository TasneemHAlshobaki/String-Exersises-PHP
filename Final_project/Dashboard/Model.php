<?php
	
	class BookModle
	{
		public $conn;
		function __construct($serverName, $userName, $password, $databaseName)
		{
			$connection = mysqli_connect($serverName, $userName, $password, $databaseName);
			if (!$connection) {
				die("Connection Failed: " . mysqli_connect_error());
			}
			$this->conn = $connection;
		}

		function insertCategory($name, $description, $price){
			$query = "CALL insertNewBook('$name', '$description',$price)";
			$result = mysqli_query($this->conn, $query);
			return $result;
		}

		function deleteCategory($id){
			$query = "CALL deleteBook($id)";
			$result = mysqli_query($this->conn, $query);
			return $result;
		}

		function updateCategory($id, $name, $description, $price){
			$query = "CALL updateBook($id, '$name', '$description', $price)";
			$result = mysqli_query($this->conn, $query);
			return $result;
		}

		function selectCategory(){
			$query = "CALL selectBooks()";
			$result = mysqli_query($this->conn, $query);

			$resultArray = array();
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					array_push($resultArray, $row);			
				}
			}
			return $resultArray;
		}
	}

?>