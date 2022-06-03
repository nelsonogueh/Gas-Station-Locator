<?php
// connect to the database 
$host			=	'localhost';
$username		=	'root';
$password		=	'root';
$db_name		=	'local';

$conn = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($conn, $db_name) or die('Could not connect to database'.mysql_error());
?>