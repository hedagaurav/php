<?php include "header.php"; ?>
<section>
    <p>Udemy--Php--Filter</p>
    
    <p>validate user input:</p>
    <?php
        // filter username
        $myemail = "hedagaurav93@gmail.com../.345";
        $myemail= filter_var($myemail, FILTER_SANITIZE_EMAIL);
        echo $myemail;
        if(filter_var($myemail, FILTER_VALIDATE_EMAIL) == TRUE){
            echo $myemail;
        }
        else{
            echo 'error';
        }
        //$myurl = filter_var($myurl, FILTER_VALIDATE_EMAIL);
    ?>
    
    
    <p>Filter username:</p>
    <?php
        // filter username
        $myusername = 'THIS IS MY USERNAME#%%$';
        $myusername = filter_var($myusername, FILTER_SANITIZE_STRING);
        echo $myusername;
    ?>

    <p>Filter email:</p>
    <?php
        // filter username
        $myemail = 'this    is my email address<script>@gmail.com';
        $myemail = filter_var($myemail, FILTER_SANITIZE_EMAIL);
        echo $myemail;
    ?>

    <p>Filter url:</p>
    <?php
        // filter username
        $myurl = "www.google.coml///";
        $myurl = filter_var($myurl, FILTER_SANITIZE_STRING);
        $myurl = filter_var($myurl, FILTER_SANITIZE_URL);
        echo $myurl;
    ?>


</section>
<p>blog page</p>


<?php include "footer.php"; ?>

</body>

</html>