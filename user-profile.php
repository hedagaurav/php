<?php
    $title = "User Profile";
    require 'header.php';
?>
<div>
    <?php
        if(isset($_SESSION['user_id'])){
            echo "<h3>". $_SESSION['user_id'] ."</h3>";
        }else{
            header("location: index.php");
            die();
        }
    ?>
    <p>Change Password:</p>
</div>
<?php
    require 'footer.php';
?>