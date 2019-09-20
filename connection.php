<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "php_database";
	$conn = new mysqli($servername,$username,$password,$database);
	if($conn->connect_error){
		die("connection failed." . $conn->connection_error);
	}
	echo "Connection Successful";
?>

</body>

</html>