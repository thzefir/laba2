<?php
$servername = "127.0.0.1";
$username = "root";
$password = "p";
$dbName = "first";

$link = mysqli_connect($servername, $username, $password);
if (!$link) {
        die("Connection error: " . mysqli_connection_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
        echo "Can't create database";
}
mysqli_close($link);


$link = mysqli_connect($servername, $username, $password, $dbName);
$sql = "CREATE TABLE IF NOT EXISTS users(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	email VARCHAR(50) NOT NULL, 
	username VARCHAR(15) NOT NULL, 
	password VARCHAR(20) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
        echo "Can't create the table";
}
mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbName);
$sql = "CREATE TABLE IF NOT EXISTS posts(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	main_text VARCHAR(255) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
        echo "Can't create the table";
}
mysqli_close($link);
?>
