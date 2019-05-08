<?php
	require __DIR__ . '/../vendor/autoload.php';
	require __DIR__ . '/db.php';
	use Medoo\Medoo;
	
	
	$db = new Medoo($cleardb_config);
	$check = $_POST['srch'] . "%";
	
	$data = $db->select('users', ["username","email"],["username[~]"=>$check]);
	
	echo json_encode($data);
	
	
	
?>