<?php
	class Database {
		// DB params
		private $host = 'localhost';
		private $db_name = 'contactlist';
		private $username = 'root';
		private $password = 'mysql';
		private $conn;

		// DB Connect
		public function connect() {
			
			$this->conn = null;

			try {
				$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $exception) {
				echo 'Connection Error: ' . $exception->getMessage(); 
			}

			return $this->conn;
		}
	}
?>