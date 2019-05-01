<?php
require 'AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/static/html/land.html';
});
// User pages which don't exist yet
$router->map('GET', '/user/[a:id]', function($id) {//       /[i:id]', function($id
	
	require __DIR__ . '/dynamic/userPage.html';
});

$router->map('GET', '/about', function() {
	require __DIR__ . '/static/html/about.html';
});

/*
$route->map('POST', '/new-user', function() {
	// crazy validation stuff
});
*/
$router->map('GET', '/signup', function() {
	require __DIR__ . '/static/html/signup.html';
});

// games 
$router->map('GET', '/game/[a:game]', function($game) {
	$games = array(
		'qc'=>'Quake Champions', 
		'csgo'=>'Counter-Strike: Global Offensive',
		'apex'=>'Apex Legends'
	);
	if(!isset($_GET['game'])) {
		$_GET['game'] = $games[$game];
	}
	require __DIR__ . '/dynamic/teams.php';
});

// User request route
$router->map('POST', '/php/signup', function() {
	// 1. Check if fields are set
	// 2. Check if username is unique
	// 3. Check if email is valid email
	// 4. Create a new entry in database
	$fields = $_POST;
	require __DIR__ . '/dynamic/php/validate.php';
});

$match=$router->match();
if(is_array($match) && is_callable($match['target'])){
	call_user_func_array($match['target'], $match['params']);
}
else {
	// dank 404
	echo 'sort of';
	header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
	echo 'sort of';
}
?>
