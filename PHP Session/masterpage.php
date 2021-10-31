<?php
	session_start();
	if(!isset($_SESSION['loginName']) && !isset($_SESSION['passWord']))
	{
		header('location:index.php');
	}
?>
<html>
	<head>
		<title>Master Page</title>
	</head>
	<body>
		<h1 align='center'>WELCOME TO MASTER PAGE</h1>
		<center><a href='logoff.php'>Click here to exit</a></center>
	</body>
</html>