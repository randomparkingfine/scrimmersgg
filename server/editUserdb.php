<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
use Medoo\Medoo;
    
    session_start();



$db = new Medoo($cleardb_config);


    $data = $db->select('users', ["user_bio", "user_games", "user_links"],["username[=]"=>$_SESSION['username']]);


echo json_encode($data);



?>
