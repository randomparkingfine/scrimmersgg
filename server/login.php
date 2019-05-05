<?php
require __DIR__ . '/db.php';
require __DIR__ . '/../vendor/autoload.php';
use Medoo\Medoo;

echo "VoHiYo";
var_dump($_POST);
/*
$db = new Medoo($cleardb_config);
$users = $db->select('users', ['username', 'password']);
foreach($users as $item) {
	if($_POST['username'] == $item['username']) {
		if($_POST['password']) {
			echo 'good';
		}
	}
}
 */
?>
