<!-- header -->
<?php 
include 'header.php';
if(isset($_SESSION['user_id'])){
    echo "session user = ".$_SESSION['user_id'];
}else{
    echo "session has no user";
}
?>

<!-- jumbotron -->
<p>Live Server working is in chrome browser. changing yes</p>
<p>Instruction - start live server in vs code, then in chrome and reload the localhost url tab in chrome browser.</p>
<p><?php echo $_SERVER['HTTP_HOST']; ?></p>
<div class="" id="jumbotron">
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
                this is not whst i thought Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
<!-- main content end -->

<!-- footer -->
<?php include 'footer.php';?>