<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_content">
			<h3>About Us</h3>
			

			<?php
			$data = "Hello \World! ";
			$data = trim($data);
			echo $data . "<br>";
			$data = stripslashes($data);
			echo $data . "<br>";
			$data = htmlspecialchars($data);
			echo $data . "<br>";
			?>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>