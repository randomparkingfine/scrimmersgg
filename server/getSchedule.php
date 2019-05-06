<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
    session_start();
    $db = new Medoo($cleardb_config);
    $email = $_SESSION['email'];   
    //$email = 'zelmhirst19@army.mil';
    //$email = 'rmacfarlanea@opensource.org'; 
    //$email = 'ppallentv@ask.com';
    $datas=$db->select('users',[
        'user_schedule'
    ],
    [
        'email'=>$email
    ]);

    echo json_encode($datas);   
?>