<?php

session_start();


require 'db.php';

$read = "SELECT * FROM login";
$result = mysqli_query($conn,$read);
$lgname = $_SESSION['username'];
while($user = mysqli_fetch_assoc($result)){
	
	if($user['uname'] ==  $lgname){
		mysqli_query($conn,"DELETE FROM login WHERE uname='$lgname' ");
		mysqli_query($conn,"DELETE FROM active WHERE uname='$lgname' ");
		mysqli_query($conn,"DELETE FROM msg WHERE uname='$lgname' ");
		unset($_SESSION['username']);
		header("refresh: 0;url=index.php");
		
	}
        else
        {
        unset($_SESSION['username']);
        header("refresh: 0;url=index.php");
        }
        }
?>