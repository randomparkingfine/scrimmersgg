<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
require __DIR__ . '/validate.php';
use Medoo\Medoo;
		if($status['email'] == "Invalid" || $status['username'] == "Invalid"){
			echo json_encode($status);
			exit;
		}
		
//		echo json_encode($data);
		$db = new Medoo($cleardb_config);
		
		$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$db->insert('users',[
			"username" => $_POST["username"],
			"email" => $_POST["email"],
			"password" => $hashedPassword
		]);
		echo 'success';

?>
