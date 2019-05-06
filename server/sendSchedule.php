<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
    // $schedule = '[{"0":{"time":"09:00","day":"4","selected":"selected"},"1":{"time":"10:00","day":"4","selected":"selected"},"2":{"time":"11:00","day":"4","selected":"selected"},"3":{"time":"12:00","day":"4","selected":"selected"},"4":{"time":"13:00","day":"4","selected":"selected"},"5":{"time":"14:00","day":"4","selected":"selected"},"6":{"time":"15:00","day":"4","selected":"selected"}}]';
    session_start();
    $db = new Medoo($cleardb_config);
    //$email = $_SESSION['email'];    
    $email = 'rmacfarlanea@opensource.org';
    
    $db->update('users', [
        'user_schedule'=>$schedule
    ],
    [
        'email'=>$email
    ]);
?>