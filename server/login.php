<?php
require __DIR__ . '/db.php';
require __DIR__ . '/../vendor/autoload.php';
use Medoo\Medoo;

$db = new Medoo($cleardb_config);
$users = $db->select('users', ['username', 'password']);
$user = $db->get(
	'users', 
	['email', 'password'], 
	['username'=>$_POST['username']]
);
if($user === null) {
	echo "<p style=\"color:red;\">Username not found!</p>";
}
else {
	if(password_verify($_POST['password'], $user['password'])) {
		echo "<p style=\"color:red;\">Bad password</p>";
	}
	else {
		echo 'success';
		// create a new session for the browser
		/*
		session_start();
		$_SESSION['email'] = $user['email'];
		 */
	}
}
?>
