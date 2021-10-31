<?php 
	session_start();
	if (isset($_SESSION["loginName"]) && isset($_SESSION["passWord"]))
	{
		header("location:masterpage.php");
	}
?>
<!doctype HTML>
<html>
	<head>
		<title>User Login</title>
	</head>
	<body>
		<form action='verifyLogin.php' method='post'>
			<br><br><br><br><br><br><br><br><br><br>
			<center>PHP SESSION</center>
			<table border='1' align='center'>
				<th colspan='2'>AUTHORIZATION</th>
				<tr>
					<td align='right'><label>Login Name:</label></td>
	 				<td><input type='text' name='loginName' value=''/></td>
				</tr>
				<tr>
					<td align='right'><label>Password:</label></td>
					<td><input type='password' name='passWord' value=''/></td>
				</tr>
				<tr>
					<td colspan='2' align='center'><input type='submit' name='submitBtn' value='Submit'/>
					<input type='reset' name='resetBtn' value='Reset'/></td>
				</tr>
			</table>
		</form>
	</body>
</html>