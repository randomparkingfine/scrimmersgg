<?php
require 'vendor/altorouter/altorouter/AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/pages/html/land.html';
});
// User pages which don't exist yet
$router->map('GET', '/user/[i:id]', function($id) {
	// NOTE: for now just return the template
	require __DIR__ . '/pages/html/user.html'; // yfw 404 page 404's
});

$router->map('GET', '/about', function() {
	require __DIR__ . '/pages/html/about.html';
});

/*
$route->map('POST', '/new-user', function() {
	// crazy validation stuff
});
*/
$router->map('GET', '/signup', function() {
	require __DIR__ . '/pages/html/signup.html';
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
	require __DIR__ . '/server/teams.php';
});

// User request route
$router->map('POST', '/php/signup', function() {
	// 1. Check if fields are set
	// 2. Check if username is unique
	// 3. Check if email is valid email
	// 4. Create a new entry in database
	$fields = $_POST;
	require __DIR__ . '/server/validate.php';
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
