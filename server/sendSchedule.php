<?php
    
    // $email = 'test@email.com';
    // $schedule = $_POST['schedule'];
    // echo $schedule;
    
    // $host = getenv('CLEARDB_HOST');
    // $dbname = getenv('CLEARDB_NAME');
    // $username = getenv('CLEARDB_USERNAME');
    // $password = getenv('CLEARDB_PASSWORD');
    

    // // Get Data from DB
    // $dbConn = new PDO("mysql:host=$host:dbname=$dbname", $username, $password);
    // $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    // $sql = "UPDATE users SET user_schedule=:schedule WHERE email=:email";
    
    // $stmt = $dbConn->prepare($sql);
    // $stmt->execute(array (
    //       ":schedule" => $schedule,
    //       ":email" => $email));

    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
    session_start();
    $db = new Medoo($cleardb_config);
    // $email = $_SESSION['email'];    
    $email = 'test@email.com';
    $db->update('users', [
        'user_schedule'=>$_POST['schedule']
    ],
    [
        'email'=>$email
    ])
?>