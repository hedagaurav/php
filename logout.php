<?php
session_start();

if(isset($_SESSION['user_id'])){
    echo"logged out";
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/Git-php/index.php');
    die();
}else{
    echo"no session";
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/Git-php/login.php');
    die();    
}
?>