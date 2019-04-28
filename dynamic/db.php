<?php

class ClearDB {
	// some default values for configuration pruposes
	private $username;
	private $password;
	private $host;
	private $dbname;

	public $conn = null;

	public function __construct() {
		$this->username = getenv('CLEARDB_USERNAME'); 
		$this->password = getenv('CLEARDB_PASSWORD');
		$this->host = getenv('CLEARDB_HOST');
		$this->dbname = getenv('CLEARDB_NAME');
		self::connect();
	}
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
