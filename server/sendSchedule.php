<?php
    require __DIR__ . '/../vendor/autoload.php';
    require 'db.php';
    use Medoo\Medoo;  
    
    $schedule = $_POST['schedule'];
    session_start();
    $email = $_SESSION['email'];
    $db = new Medoo($cleardb_config);
    $sql = "UPDATE users SET schedule=$schedule WHERE email=$email";
    $db->query($sql);
?>