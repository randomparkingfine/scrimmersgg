<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/db.php';
    use Medoo\Medoo;
    session_start();
    
    $db = new Medoo($cleardb_config);
    
    
    $db->update('users', [
                
                'user_bio'=>$_POST['passedBio'],
                'user_links'=>$_POST['passedLink'],
                'user_games'=>$_POST['passedGames']
                
                ],
                [
                'username'=>$_SESSION['username']
                ]);
    
    ?>

