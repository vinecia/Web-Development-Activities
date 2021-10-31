<?php
	session_start();
	if (!isset($_SESSION['loginName']) && !isset($_SESSION['passWord']))
	{
		header('location:index.php');
	}
	else
	{
		session_destroy();
		echo "<script> alert('Logoff Successful!')</script>";
		header('location:index.php');
	}
?>