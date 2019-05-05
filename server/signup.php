<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
require 'validate.php';
use Medoo\Medoo;
		session_start();
		if($status['email'] == "Invalid" || $status['username'] == "Invalid"){
			echo json_encode($status);
			exit;
		}
		
//		echo json_encode($data);
		$db = new Medoo($cleardb_config);
		
		$options = [
			'cost' => 12,
//            'salt' => generateBase62String(22),
        ];

		$hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
		
		$db->insert('users',[
			"username" => $_POST["username"],
			"email" => $_POST["email"],
			"password" => $hashedPassword
		]);

?>
