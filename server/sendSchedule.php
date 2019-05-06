<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
    session_start();
    $db = new Medoo($cleardb_config);
    $email = $_SESSION['email'];    
    //$email = 'rmacfarlanea@opensource.org';
    //$email = 'zelmhirst19@army.mil';
    $db->update('users', [
        'user_schedule'=>$_POST['schedule']
    ],
    [
        'email'=>$email
    ]);
?>