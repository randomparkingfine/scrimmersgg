<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
//    session_start();
    
    
    $db = new Medoo($cleardb_config);
    
    
    //["region[=]"=>$_POST["regions"]
    $data = $db->select('users', "*",["username[~]"=>$_POST['usernames']]);
    
    echo json_encode($data);
    
    
    
    ?>

