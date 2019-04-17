<?php
require 'AltoRouter.php';

$router = new AltoRouter();

// Base level pages
$router->map('GET', '/[a:basePage]', function ($baseGame) {
	// get that games page
	require __DIR__ . '/static/html/' . $baseGame . '.html';
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
