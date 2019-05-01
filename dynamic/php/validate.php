<?php
require __DIR__ . '/../vendor/autoload.php';
require 'db.php';
use Medoo\Medoo;

    $db = new Medoo($cleardb_config);
    
    $data = $db->select("users_sample","*")
//    echo json_encode($data);
?>

    
<!--     $status = array(); -->
<!--     $status['email'] = "Valid"; -->
<!--     $status['username'] = "Valid"; -->
<!--     -->
<!--     $email_regex = "[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}"; -->
<!--      -->
<!--     $con=mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b076f7bfe24b18","0a264f0993bceb9","heroku_4f58a1b681d6fa5"); -->
<!--     $check='SELECT * FROM users WHERE email=`' . $_POST['email'] . '`OR' . 'username = `' . $_POST['username'] . '`;'; -->
<!-- //    $sql = "`SELECT` * `FROM` users_sample `WHERE` email=" . $_POST['email'] . "`OR` first_name=" . $_POST['username']; -->
<!--      -->
<!--     $stmt = $conn->prepare($sql); -->
<!--     $stmt->execute(); -->
<!--     $records = $stmt->fetchAll(PDO::FETCH_ASSOC); -->
<!--      -->
<!--     $rs = mysqli_query($con,$check); -->
<!--     $data = mysqli_fetch_array($rs, MYSLI_NUM); -->
<!--      -->
<!--     if(!filter_var($_POST['email'], $email_regex)){ -->
<!--         $status['email'] = "Invalid"; -->
<!--         echo json_encode($status); -->
<!--         exit; -->
<!--     } -->
<!--      -->
<!--     if($data[0] >1){ -->
<!--         $status['username'] = "Invalid"; -->
<!--         echo json_encode($status); -->
<!--         exit; -->
<!--     } -->
<!--      -->
<!--     echo json_encode($status); -->