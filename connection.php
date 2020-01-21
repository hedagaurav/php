<?php 
	// database connection
	// echo $_SERVER['HTTP_HOST'];
// print_r($_SERVER);
if ($_SERVER['HTTP_HOST'] == "localhost") {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "php_database";

} else {
	// for online website kukumgh.offyoucode.co.uk
	$servername = "localhost";
	$username = "kukumgho_php";
	$password = "root";
	$database = "kukumgho_php";
}

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("connection failed." . $conn->connect_error);
} else{
	echo "<br>Online Connection Successful";
}

?>