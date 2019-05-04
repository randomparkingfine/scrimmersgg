<?php
require __DIR__ . '/../vendor/autoload.php';
require 'db.php';
use Medoo\Medoo;
	function signUp($email = "",$password = "",$username = "") {
		session_start();

		$db = new Medoo($cleardb_config);
		
		$options = [
			'cost' => 12,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            'salt' => generateBase62String(22),
        ];
        
        $hashedEmail = password_hash($_POST['email'], PASSWORD_BCRYPT,$options);
//        $parameters[":email"] = $hashedEmail;

		$hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
//		$parameters[":password"]= $hashedPassword;

		$db->insert('user_sample',[
			"first_name" => $_POST["username"],
			"email" => $hashedEmail,
			"password" => $hashedPassword
		]);
	}
?>
