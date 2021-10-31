<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		echo '<script >alert("You have successfully logged in!"); </script>';
		header("location:myaccount.php");
	}
	else echo '<script >alert("You are not logged in!"); </script>';
?>

<html>
<head>
	<link rel="icon" href="images/logo.png">
	<title>Login | Register | ParkU</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
	<div class = "hero">
		<div class = "formbox" id="fbox">
			<div class = "logomid">
				<img src = "images/logo.png">
				<h2>ParkU</h2>
			</div>

			<div class = "buttonbox">
				<div id = "btn1"></div>
				<button type = "button" class = "togglebtn" onclick="login()">Log In</button>
				<button type = "button" class = "togglebtn" onclick="register()">Register</button>
			</div>
		</br>

			<form id = "login" action="validation2.php" method="post" class = "inputgroup">
				<input type="text" class="inputfield" name = "user" placeholder="Username" required>
				<input type="password" class="inputfield" name = "password" placeholder="Password" required>
				<input type="submit"  value="Login" class="submitbtn">
				</br></br>
				<center><a href="index.php">Return to Home Page</a></center>
			</form>


			<form id = "register" class="inputgroup" action="registration2.php" method="post">
				<input type="text" class="inputfield" name = "fName" placeholder="First Name" required>
				<input type="text" class="inputfield" name = "mName" placeholder="Middle Name" required>
				<input type="text" class="inputfield" name = "lName" placeholder="Last Name" required>
				<input type="text" class="inputfield" name = "emailAdd" placeholder="Email Address" required>
				<input type="text" class="inputfield" name = "username" placeholder="Username" required>
				<input type="password" class="inputfield" name = "password" placeholder="Password" required>
				<select class="inputfield" name = "category" placeholder="Category" required>
    				<option value="Category">Category</option>
    				<option value="Driver">Driver</option>
   					<option value="Manager">Manager</option>
 				</select>
 				<input class="inputfield" type="text" name = "cpName" placeholder="Car Park Name (If USER, please type N/A)" required>
 				<input class="inputfield" type="text" name = "cpAdd" placeholder="Car Park Address (If USER, please type N/A)" required>

 				<button type="submit" class="submitbtn">Register</button>
			</form>


		</div>
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn1");
		var f = document.getElementById("fbox");
		var s = document.getElementByClass("hero");

		function register()
		{
			x.style.left = "-500px";
			y.style.left = "110px";
			z.style.left = "110px";
			fbox.style.height = "690px";
			if(s.style.width<600)
			{
				x.style.left = "-500px";
				y.style.left = "20px";
				z.style.left = "50px";
			}
		}

		function login()
		{
			x.style.left = "110px";
			y.style.left = "610px";
			z.style.left = "0px";
			fbox.style.height = "580px";
		}

	</script>

</body>
</html>
