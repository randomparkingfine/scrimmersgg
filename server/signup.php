<?php
require __DIR__ . '/../vendor/autoload.php';
require 'db.php';
require 'validate.php';
use Medoo\Medoo;
		session_start();
		if($status['email'] === "Invalid" || $status['username'] === "Invalid"){
			$status['check'] = 'taken';
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
		
		$test["username"] = $_POST["username"];
		$test["password"] = $hashedPassword;
		$test["email"] = $hashedEmail;
//		echo json_encode($test);
		
		$db->insert('users',[
			"username" => $_POST["username"],
			"email" => $_POST["email"],
			"password" => $hashedPassword
		]);

?>
