<?php
    
    $status = array();
    $status['email'] = "Valid";
    $status['username'] = "Valid";
   
    $email_regex = "[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}";
    
    $con=mysqli_connect("localhost","root","","my_db");
    $check="SELECT * FROM users WHERE email = '$_POST[`email`]' OR username = '$_POST[`username`]'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $rs = mysqli_query($con,$check);
    $data = mysqli_fetch_array($rs, MYSLI_NUM);
    
    if(!filter_var($_POST['email'], $email_regex)){
        $status['email'] = "Invalid";
        echo json_encode($status);
        exit;
    }
    
    if($data[0] >1){
        $status['username'] = "Invalid";
        echo json_encode($status);
        exit;
    }
    
    echo json_encode($status);
    
    
    
?>
