<?php

	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location: login2.php');
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/logo.png">
		<title>My Account | ParkU</title>
		<link rel = "stylesheet" type= "text/css" href = "style.css">
	</head>
	<body>
		<div class = "container">
			<div class = "navbar">
				<a href="index.html"><img src = "logo.png" class="logo"></a>
				<h2>ParkU</h2>
				<nav>
					<ul id = "menuList">
						<li><a href="index.php">HOME</a></li>
						<li><a href="bookmarks.php">BOOKMARKS</a></li>
						<li><a href="myaccount.php">MY ACCOUNT</a></li>
					</ul>
				</nav>
				<img src = "images/menu.png" class="menu-icon" onclick="togglemenu()">
			</div>
      <div class="row">
				<div class = "col-1">
					<h2>Hello there,<br><?php echo $_SESSION['fname'];?>!</h2>
				</div>
				<div class="col-2">
					<!----Bookmarks----->
	        <div class="buttongroup">
	          <div id="btn3"></div>
						<form  action="logout2.php" method="post">
							<input type="button" name="Bookmark" class="toggle"  value="About You" style="cursor: context-menu;">
							<input type="submit" class="toggle" value="Log Out">
						</form>
					</div>

						<table id="bookmark">
							<tbody>
								<tr>
									<td><h3><?php echo $_SESSION['fname'];?></h3><p>First Name</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['mname'];?></h3><p>Middle Name</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['lname'];?></h3><p>Last Name</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['emailAdd'];?></h3><p>Email Address</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['username'];?></h3><p>Username</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['password'];?></h3><p>Password</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['category'];?></h3><p>Category</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['cpName'];?></h3><p>Car Park Name</p></td>
								</tr>
								<tr>
									<td><h3><?php echo $_SESSION['cpAdd'];?></h3><p>Car Park Address</p></td>
								</tr>
							</tbody>
						</table>


	      </div>
	 		</div>
		</div>
	<script>
			var menuList = document.getElementById("menuList");
			menuList.style.maxHeight = "0px";
			function togglemenu()
			{
				if (menuList.style.maxHeight == "0px")
				{
					menuList.style.maxHeight = "120px"
				}
				else
				{
					menuList.style.maxHeight = "0px"
				}
			}


      function bookmark()
      {
				b.style.left = "50px";
				h.style.left = "450px";
				btn.style.left = "0";
				btn.style.width = "59%";
				h.style.display = "none";
				b.style.display = "flex";
      }
	</script>

	</body>
</html>
