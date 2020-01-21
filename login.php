<?php
$title = "Login";
require 'header.php';

if(isset($_SESSION['user_id'])){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/php/index.php');
}
?>

<?php
    //echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['login'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(($username == 'admin') && ($password == 'admin')){
            $_SESSION['user_id'] = $username;
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/php/index.php', true, 301);
            die();
        }
        else{
            print("username or password is incorrect");
        }
    }
}
?>

<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div>
            <label for="username">Username - </label>
            <input type="text" name="username" id="username" placeholder="Enter Username" autofocus>
        </div>
        <div>
            <label for="password">Password - </label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
        </div>
        <div>
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</div>

<?php
include "footer.php";

?>