<?php

require __DIR__ .  '/server/db.php';
require 'AltoRouter.php'; // vendor/altorouter/altorouter/

require __DIR__ . '/vendor/autoload.php';


use Medoo\Medoo;
    
session_start();


$router = new AltoRouter();

// Base level pages
$router->map('GET', '/', function() {
	require __DIR__ . '/pages/html/land.php';
});
// User pages which don't exist yet

$router->map('GET', '/about', function() {
	require __DIR__ . '/pages/html/about.php';
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
$router->map('GET', '/user/[a:id]', function($name) {
    // check to make sure the requested user even exists

//    $db = new Medoo($cleardb_config);
//    $data = $db->select('users', ['username'], ['username'=>$name]);
//    // we should only find 1 player from this
//    if(count($data)==1) {
//        $user_id = $id;
//        require __DIR__ . '/pages/html/userPage.php'; // yfw 404 page 404's

    $somethingelse = new Medoo(array(
		'database_type' => 'mysql',
		'database_name' => getenv('CLEARDB_NAME'),
		'server' => getenv('CLEARDB_HOST'),
		'username' => getenv('CLEARDB_USERNAME'),
		'password' => getenv('CLEARDB_PASSWORD')
	));
	$db = new Medoo($somethingelse);
    $data = $db->get('users', 'username', ['username'=>$id]);
    // Check to  make sure the requested user exists at all
    if(count($data) != null) {
        $user_id = $id;
        require __DIR__ . '/pages/html/userPage.html'; // yfw 404 page 404's

    }
    else {
        header($_SERVER('SERVER_PROTOCOL', ' 404 Not Found'));
    }
});
// games
$router->map('GET|POST', '/game/[a:game]', function($game) {
	$games = array(
		'qc'=>'Quake Champions', 
		'csgo'=>'CS:GO',
		'apex'=>'Apex Legends'
	);
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
