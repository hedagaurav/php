<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- user stylesheet -->

    <!-- Mobile CSS -->
    <link rel="stylesheet" href="./css/index-mobile.css" media="screen and (max-width:768px)">

    <!-- Tablet CSS -->
    <!-- <link rel="stylesheet" href="./css/index-tablet.css" media="screen and (min-width:768px) and (max-width:1024px)"> -->

    <!-- Lappy CSS -->
    <link rel="stylesheet" href="index.css" media="screen and (min-width:768px) and (max-width:1920px)">


    <!-- <link rel="stylesheet" href="index-lappy.css" media="screen and (min-width:768px) and (max-width:1920px)"> -->
	
	<!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jquery ui -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- jquery theme -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- user javascript file -->
    <script src=index.js></script>
</head>

<body>
    <div class="container">
        <?php include "header.html"; ?>
        <div class="main_content">

            <h3>Menu</h3>
            <div id="pizza">
                <div id="pizza_image">
                    <img src="" alt="pizza image">
                </div>
                <h4>pizza name</h4>
                <p>pizza quantity</p>
            </div>

        </div>
        <?php include "footer.php"; ?>
    </div>
</body>

</html>