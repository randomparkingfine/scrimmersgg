<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
use Medoo\Medoo;
session_start();

    $status = array();
    $status['email'] = "Valid";
    $status['username'] = "Valid";
    $db = new Medoo($cleardb_config);
   
    $data = $db->select('users', ["username","email"],["username[=]"=>$_POST["username"], "email[=]"=>$_POST["email"] ]);
    
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $status['email'] = "Invalid";

    }
    if($data[0]['email'] == $_POST["email"]){
        $status['email'] = "Invalid";
    }
    
    if($data[0]['username'] == $_POST["username"]){
        $status['username'] = "Invalid";
    }
//    echo json_encode($status);
    

    
    
?>
