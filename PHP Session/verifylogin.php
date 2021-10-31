<?php
	Session_start();
	
	if($_REQUEST['loginName']=='ABC' && $_REQUEST['passWord']=='123')
	{
		$_SESSION['loginName']='ABC';
		$_SESSION['passWord']='123';
		echo "<script>alert('Login Successful!');</script>";
		echo "<script>window.location.href='masterpage.php'</script>";
		}
	else
	{
		echo "<script>alert('Unauthorized Login!');</script>";
		echo "<script>window.location.href='index.php'</script>";		
	}
?>