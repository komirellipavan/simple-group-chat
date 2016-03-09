<?php


$host = 'localhost';
$db_username = "yourusername";
$db_password = "yourpassword";
$dbname = "yourdbname";
$dbport = '3306';//database port number
$conn = mysqli_connect($host,$db_username,$db_password,$dbname,$port);

if(!$conn){
	echo mysqli_error($conn);
}




?>
