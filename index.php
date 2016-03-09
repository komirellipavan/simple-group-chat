<?php
session_start();
		if(isset($_SESSION['username'])){
			unset($_SESSION['username']);
		}

?>
<!DOCTYPE html>
<html>
<head>
<title>Groupchat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<h1 align="center">Group Chat<h1>
	<br/>
	<br/>
	<br/>
	<br/>
	
	<form action="login.php" method="post" align="center">
	
		Username&nbsp&nbsp&nbsp <input type="text" name="username" required>
		<input type="submit" value="login">

	</form>
		
</body>
</html>