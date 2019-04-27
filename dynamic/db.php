<?php

class ClearDB {
	// some default values for 
	private $username = getenv('CLEARDB_USERNAME'); 
	private $password = getenv('CLEARDB_PASSWORD');
	private $host = getenv('CLEARDB_HOST');
	private $dbname = getenv('CLEARDB_NAME');

	private $conn = null;

	public function connect() {
		// True if a connection was established 
		// False if a connection failed
		$this->conn = mysqli_connect(
			$this->host,
			$this->username,
			$this->password,
			$this->dbname
		) or die ('Connection failed' . $this->conn->connect_error);
		if(!$this->conn) {
			return false;
		}
		return true;
	}

	public function close() {
		$this->conn->close();
	}


}


?>
