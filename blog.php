<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<style type="text/css">
		#image{
			margin: 20px;
			border: 3px solid red;

		}
		.frame{
			border: 3px solid black;
			/*width: 200px;*/
			height: 200px;
			margin-right: 10px;
			display: inline-block;

		}
		img{
			height: auto;
			width: auto;
			max-height: 100%;
			max-width: 100%;
		}

		.image_name:hover {
			text-decoration: underline;
		}


	</style>
</head>
<body>
	<div class="container">
		<?php include "header.html"; ?>
		<div class="main_content">
			<h3>Blog Page Here</h3>
			<div id="image">
				<div class="frame">
					<a href="#" target="">
						<img src="media/images/journey.jpg">
					</a>
					<a href="#" class="image_name">
						<p>Journey Image</p>
					</a>
				</div>
				<div class="frame">
					<a href="#">
						<img src="media/images/hello world.png">
					</a>
					<a href="#">
						<p>Journey Image</p>
					</a>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>