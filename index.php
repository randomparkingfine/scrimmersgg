<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/server/db.php';
//require 'AltoRouter.php'; // vendor/altorouter/altorouter/

use SendGrid\Mail;
use Medoo\Medoo;
    
session_start();

var_dump($_SESSION);

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/pages/html/land.php';
});

// The about page will serve as an example of how to use the sendgrid api from php
$router->map('GET|POST', '/about', function() {
	if(isset($_POST['message'])) {
		// Go off to try and send the email from the user
		require __DIR__ . '/server/aboutMail.php';
	}
	else {
		require __DIR__ . '/pages/html/about.php';
	}
});

$router->map('GET|POST', '/schedule', function() {
	require __DIR__ . '/server/sendSchedule.php';
});

// These requests lead to changes in session states so they're grouped here

$router->map('GET|POST', '/signup', function() {
	if(empty($_POST)) {
		require __DIR__ . '/pages/html/signup.php';
	}
	else {
		require __DIR__ . '/server/signup.php';
	}
});
$router->map('POST|GET', '/login', function() {
	if(empty($_POST)) {
		require __DIR__ . '/pages/html/login.php';
	}
	else {
		require __DIR__ . '/server/login.php';
	}
});
$router->map('GET', '/logout', function() {
	session_destroy();
	require __DIR__ . '/pages/html/logout.php';
});

// Team pages
$router->map('GET|POST', '/team/[a:id]', function($id) {
	// the id is the team owner id
             require __DIR__ . '/pages/html/teams.php';

});

$router->map('POST', '/dbTeams.php', function() {
   require __DIR__ . '/server/dbTeams.php';
});



    
// User pages
$router->map('GET', '/user/[a:id]', function($id) {
    $db = new Medoo(array(

		'database_type' => 'mysql',
		'database_name' => getenv('CLEARDB_NAME'),
		'server' => getenv('CLEARDB_HOST'),
		'username' => getenv('CLEARDB_USERNAME'),
		'password' => getenv('CLEARDB_PASSWORD')
	));
    $user_data = $db->get(
		'users', 
		['username', 'user_bio', 'user_games', 'user_links', 'user_schedule'], 
		['username'=>$id]
	);

	if($user_data == null) {
		var_dump($id);
        header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
	}
    else {

		$temp = $db->select('users', "email",["username[=]"=>$id]);
		$_SESSION['atemail'] = $temp[0];
		$_SESSION['atPage'] = $id;
        require __DIR__ . '/pages/html/userPage.php';
    }
});
// games
$router->map('GET|POST', '/game/[a:game]', function($game) {
	$games = array(
		'qc'=>'Quake Champions', 
		'csgo'=>'CS:GO',
		'apex'=>'Apex Legends'
	);
	if(!empty($_POST)){
		require __DIR__ . "/dbTeams.php";
	}
	if(!isset($_GET['game'])) {
		$_GET['game'] = $games[$game];
        $_SESSION['game'] = $games[$game];
	}
	require __DIR__ . '/pages/html/teams.php';
});

$match=$router->match();
if(is_array($match) && is_callable($match['target'])){
	call_user_func_array($match['target'], $match['params']);
}
else {
	// dank 404
	header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
}
?>
