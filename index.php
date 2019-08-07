<!DOCTYPE html>
<html>

<head>
    <title>Php Project Index</title>
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

<body onload="show_width()" id="body">
    <div class="container">
        <div id="width">
            <button type="button">click</button>
            <table style="text-align:center; ">
                <tr>
                    <td>Screen Width:</td>
                    <td id="screen_width"></td>
                </tr>
                <tr>
                    <td>Body Width:</td>
                    <td id="body_width"></td>
                </tr>
                <tr>
                    <td>Container Width</td>
                    <td id="container_width"></td>
                    <td>margin single:</td>
                    <td id="contm"></td>
                </tr>
            </table>
        </div>

        <!-- header -->
        <?php include 'header.html';?>

        <!-- jumbotron -->
        <div class="jumbotron" id="jumbotron">
            <div class="jumbotron_frame">
                <img src="media/images/journey.jpg" alt="journey">
            </div>
            <!-- <p>width of jumbotron : <span id="jumbo_width"></span></p> -->
        </div>

        <!-- main content -->
        <div class="main_content">
            <!-- #section 1 -->
            <!-- <p>width of section1 : <span id="section1_width"></span></p> -->
            
            <div class="section" id="section1">
                <div class="article">
                    <h3>article 1</h3>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <div class="article">
                    <h3>article 1</h3>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <div class="article">
                    <h3>article 1</h3>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <!-- footer -->

        <footer class="footer">
            <?php include 'social.html'; ?>
            <div class="location">
                <p>Meet us @ add your current addressand location here.</p>
            </div>
            <div class="footer-wrap">
                <h3>Footer</h3>
                <p>Created By Gaurav Heda.</p>
            </div>

        </footer>
        <!-- main content end -->
    </div>

</body>

</html>