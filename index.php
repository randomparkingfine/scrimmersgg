<?php
require 'AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/static/html/index.html';
});

$router->map('GET', '/about', function() {
	require __DIR__ . '/static/html/about.html';
});

$router->map('GET', '/signup', function() {
	require __DIR__ . '/static/html/signup.html';
});

// games 
$router->map('GET', '/game/[a:game]', function($game) {
	require __DIR__ . '/static/html/' . $game . '.html';
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
