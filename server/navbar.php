<?php
require __DIR__ . '/../vendor/autoload.php';
require 'db.php';
use Medoo\Medoo;

function activeUser() {
	$email = $_SESSION['email'];
	$db = new Medoo($cleardb_config);

	// Check if the email exists in the records
	$result = $db->select('users', 'email', ['email'=>$email]);
	if(count($result) == 1) {
		return true;
	}
	// if the result is anything but 1 then we should just give back the result
	return false;

}
function defaultNav() {
	echo '<li><a href="/login">Login</a></li>';
	echo '<li><a href="/signup">Signup</a></li>';
}

function loggedInNav() {
	echo '<li><a href="/logout">Logout</a></li>';
}
?>
