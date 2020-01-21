<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        <?php 
        if(isset($title)){
            echo $title;
        }else{
            $title = "Php Project";
            echo $title;
        }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jquery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jquery ui -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- jquery theme smoothness-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- user stylesheet -->
    <!-- Mobile CSS -->
    <!-- <link rel="stylesheet" href="./css/index-mobile.css" media="screen and (max-width:540px)"> -->

    <!-- Tablet CSS -->
    <!-- <link rel="stylesheet" href="./css/index-tablet.css" media="screen and (min-width:768px) and (max-width:1024px)"> -->

    <!-- Lappy CSS -->
    <link rel="stylesheet" href="./css/index.css" media="screen and (min-width:540px) and (max-width:1920px)">
    <link rel="stylesheet" href="./css/header-lappy.css" media="screen and (min-width:540px) and (max-width:1920px)">
    <link rel="stylesheet" href="./css/footer-lappy.css" media="screen and (min-width:540px) and (max-width:1920px)">
    <link rel="stylesheet" href="./css/menu-lappy.css" media="screen and (min-width:540px) and (max-width:1920px)">
    <!-- <link rel="stylesheet" href="index-lappy.css" media="screen and (min-width:768px) and (max-width:1920px)"> -->

    <!-- user javascript file -->
    <script src=index.js></script>
</head>

<body id="body">
    <div class="container">
        <!-- navbar layout
            { Brand | Nav-links[ Menu | User ] }
        -->
        <header id="header" class="header">
            <div class="brand">
                <h3>this is brand / icon</h3>
                <a id="sandwich" class="bars">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </div>

            <div class="navbar1" id="navbar">
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="menu.php">Menu</a>
                    <a href="about.php">About Us</a>
                    <a href="blog.php">Blog</a>
                    <a href="feedback.php">Feedback</a>
                </div>

                <?php
                if(isset($_SESSION['user_id'])) :
                   ?>
                   <div class="user">
                    <a href="./user-profile.php"><?php echo $_SESSION['user_id'];?></a>
                    <a href="./logout.php">Logout</a>
                </div>
                <?php
            else:
                ?>
                <div class="user">
                    <a href="./login.php">Login</a>
                    <a href="#">Sign Up</a>
                </div>
            <?php endif ?>
        </div>
    </header>
    <button type="button" onclick="show_width()">click</button>
    <?php if ($title == "Php Project") : ?>

        <div id="width" >
            <table style="text-align:center; ">
                <tr>
                    <th>Screen Width:</th>
                    <td id="screen_width"></td>

                    <th>Body Width:</th>
                    <td id="body_width"></td>

                    <th>Container Width</th>
                    <td id="container_width"></td>

                    <th>margin single:</th>
                    <td id="contm"></td>
                </tr>
            </table>
        </div>

        <?php endif ?>