<?php
	require __DIR__ . '/../vendor/autoload.php';
	require __DIR__ . '/db.php';
	use Medoo\Medoo;
	
	
//	$db = new Medoo($cleardb_config);
	$db = new Medoo(array(

				'database_type' => 'mysql',
				'database_name' => "heroku_4f58a1b681d6fa5",
				'server' => "us-cdbr-iron-east-02.cleardb.net",
				'username' => "b076f7bfe24b18",
				'password' => "16f9125243321f4"
			));
	
	
	$data = $db->delete('users', ["username"=>$_POST["remUser"]]);
	
//	echo json_encode("success");
?>