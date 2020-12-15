<?php

$server = "localhost";
$dbusername = "root";
$password = "";
$db = "POS-system";
$debug = "false";

$conn = mysqli_connect($server, $dbusername, $password, $db);
if (!isset($_SESSION)){
session_start();
}

if($conn->connect_error){
	die('Could not connect: ' . $conn-> connect_error);
}elseif($debug == "true"){
	echo nl2br("\nDEBUG:\n");
	echo nl2br("3 \n 2 \n 1...");
	echo nl2br("\n Connected successfully\n");
	}
	?>