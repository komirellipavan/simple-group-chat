<?php
require "db.php";
session_start();
$action = $_POST["action"];
$session_user = $_SESSION['username'];
if($action == "showcomment"){

$post_query =mysqli_query($conn,"SELECT * From msg");

if($post_query){
while($row=mysqli_fetch_assoc($post_query)){
        echo "<li><b>$row[uname]</b> : $row[msg]</li>";
     }
}
}

else if($action=="addcomment"){
    $uname= $_SESSION["username"];
    $msg=$_POST["message"];
	mysqli_query($conn,"INSERT INTO msg values(NULL,'$uname','$msg') ");
 
    
  }
  else if($action=="showusers"){
    
	$user_online_query=mysqli_query($conn,"SELECT uname FROM login");
	if($user_online_query){
		echo "<center><font size=\"5\" color=\"red\">Online Users</font></center>";
		while($row=mysqli_fetch_assoc($user_online_query)){
        echo "<li><b>$row[uname]</b></li>";
     }
}
 
    
  }

 else if($action=="active"){
    
	mysqli_query($conn,"UPDATE active SET time= NOW() WHERE uname='$session_user'");

}
 
    
  

mysqli_close($conn);
?>