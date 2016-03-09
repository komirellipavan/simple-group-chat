<?php


$host = 'fdb14.biz.nf';
$db_username = "2076175_grpchat";
$db_password = "p@^@n123";
$dbname = "2076175_grpchat";
$dbport = '3306';
$conn = mysqli_connect($host,$db_username,$db_password,$dbname,$port);

if(!$conn){
	echo mysqli_error($conn);
}




?>
