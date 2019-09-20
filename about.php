<?php include "header.html"; ?>
<div class="main_content">
    <h3>About Us Page</h3>
<div class="about-wrap">
    <?php
		for ($i=0; $i < 4; $i++) { 
	?>

    <div class="about-card">
        <div class="about-image">
            <h2>image</h2>
        </div>

        <div class="about-body">
            <p>Image Name</p>
            <a href="#">order</a>
        </div>

    </div>

    <?php
        }
	?>
</div>
</div>
<?php include "footer.php"; ?>
</div>
</body>

</html>