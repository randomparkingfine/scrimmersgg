<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
use Medoo\Medoo;

function activeUser() {
	if(!isset($_SESSION['email']) || !isset($_SESSION['username'])) {
		return false;
	}

	// setup to check the email in the database
	$email = $_SESSION['email'];
	$db = new Medoo(array(
		'database_type' => 'mysql',
		'database_name' => getenv('CLEARDB_NAME'),
		'server' => getenv('CLEARDB_HOST'),
		'username' => getenv('CLEARDB_USERNAME'),
		'password' => getenv('CLEARDB_PASSWORD')
	));

	// Check if the email exists in the records
	$result = $db->get('users', ['email'], ['email'=>$email]);
	return $result != null;
}
function defaultNav($activePage='') {
	switch ($activePage) {
		case 'login':
			echo '<li class="active"><a href="/login">Login</a></li>';
			echo '<li><a href="/signup">Signup</a></li>';
			break;
		case 'signup':
			echo '<li><a href="/login">Login</a></li>';
			echo '<li class="active"><a href="/signup">Signup</a></li>';
			break;
		default:
			echo '<li><a href="/login">Login</a></li>';
			echo '<li><a href="/signup">Signup</a></li>';
			break;
	}
}

function loggedInNav() {
	echo '<li><a href="/logout">Logout</a></li>';
}
?>
