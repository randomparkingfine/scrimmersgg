<?php
require 'vendor/altorouter/altorouter/AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/static/html/land.html';
});
// User pages which don't exist yet
$router->map('GET', '/user/[i:id]', function($id) {
	// NOTE: for now just return the template
	require __DIR__ . '/static/html/user.html'; // yfw 404 page 404's
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

// helper function to check that we have all parameters for a signup
function properSignUp($fields) {
	return $fields['username'] && $fields['password'] && $fields['email'];
}
// User request route
$router->map('POST', '/php/signup', function() {
	// 1. Create the new user entry in our database
	// 2. Assuming we successfully did 1 we can send them to a success page
	// 3. that page will have a link to go the homepage with them logged in
	if(properSignUp($_POST)) {
		require __DIR__ . '/static/php/success.php';
	}
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
