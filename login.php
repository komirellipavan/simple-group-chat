<?php
session_start();
require 'db.php';

$flag=false;
$read = "SELECT * FROM login";
$result = mysqli_query($conn,$read);
$uname = $_POST['username'];

if(mysqli_num_rows($result)>0){
while($user = mysqli_fetch_assoc($result)){
	
	if($user['uname'] ==  $_POST['username']){
		
		echo "<font size=\"10\"><strong ><center>Choose different, $uname already exits<br/></center>";
		echo "<center><a href=\"index.php\">Back</a></center></strong></font>";
		$flag = true;
		break;
	}
	
}
}

if($flag == false)
	{
		$_SESSION['username'] = $uname;
                
		$result=mysqli_query($conn,"INSERT INTO login VALUES(NULL,'$uname')");
            
		mysqli_query($conn,"INSERT INTO active VALUES(NULL,'$uname',NOW())");
	
		header("refresh:0;url=chat.php");
		
		
	}
	mysqli_close($conn);



?>