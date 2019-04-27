<?php
// This file provides a simple interface for connecting to Cleardb Data
// on heroku
//
//
// NOTE: we are going to use the heroku config vars to keep the db creds off of git

// Returns a connection object to the cleardb database
$cleardb_config = array(
	'user' => getenv("CLEARDB_USERNAME"),
	'pass' => getenv("CLEARDB_PASSWORD"),
	'host' => getenv("CLEARDB_HOST"),
	'name' => getenv("CLEARDB_NAME")
);

function connect_cleardb() {
	$ret = mysqli_connect(
		$cleardb_config['host'],
		$cleardb_config['user'],
		$cleardb_config['pass'],
		$cleardb_config['name']
	) or die('DB connection failed' . $ret->connect_error);
	return $ret;
}


// TODO: some sort of easier mechanism for querying the database
// tbh client code should build a query then just give it to us
?>
