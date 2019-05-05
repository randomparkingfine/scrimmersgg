<?php
    require __DIR__ . '/../vendor/autoload.php';
    require 'db.php';
    use Medoo\Medoo;
    session_start();
    
   
    $db = new Medoo($cleardb_config);
    
    $data = $db->select('teams', ["captain","team_name", "team_bio", "region"],["region[=]"=>$_POST["regions"], "game[=]"=>$_SESSION['game']]);

    echo json_encode($data);
    

    
    ?>
