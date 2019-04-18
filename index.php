<?php
require 'AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/static/html/index.html';
});

$router->map('GET', '/about', function() {
	require __DIR__ . '/static/html/index.html';
});

$router->map('GET', '/[a:game]', function($game) {
	$games = array("csgo");
	echo "game found";
	if(in_array($game, $games)){ 
		require __DIR__ . '/static/html/' . game . '.html';
	}
});

/*
$router->map('GET', '/[a:basePage]/', function ($baseGame) {
	// TODO: dynamic game data request things
	// get that games page
	require __DIR__ . '/static/html/' . $baseGame . '.html';
});
 */

// User pages which don't exist yet
$router->map('GET', '/user/[i:id]', function($id) {
	// NOTE: for now just return the template
	require __DIR__ . '/static/html/user.html'; // yfw 404 page 404's
});

$match=$router->match();

// Checking if we have a verified request match
if(is_array($match) && is_callable($match['target'])){
	call_user_func_array($match['target'], $match['params']);
}
else {
	// dank 404
	header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
}
?>
