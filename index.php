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

// helper function to check that we have all parameters for a signup
function properSignUp($fields) {
	return $fields['username'] && $fields['password'] && $fields['email'];
}
// User request route
$router->map('POST', '/php/signup', function() {
	// 1. Create the new user entry in our database
	// 2. Assuming we successfully did 1 we can send them to a success page
	// 3. that page will have a link to go the homepage with them logged in
}	if(properSignUp($_POST)) {
		require __DIR__ . '/static/php/success.php';
	}
);

$match=$router->match();
if(is_array($match) && is_callable($match['target'])){
	call_user_func_array($match['target'], $match['params']);
}
else {
	// dank 404
	header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
}
?>
