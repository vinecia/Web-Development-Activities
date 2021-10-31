<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <title>Bookmarks | ParkU</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div class = "container">
			<div class = "navbar">
				<a href="index.php"><img src = "images/logo.png" class="logo"></a>
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
					<h2>Your favorite<br>parking spaces</h2>
				</div>
				<div class="col-2">
					<!----Bookmarks----->
	        <div class="buttongroup">
	          <div id="btn"></div>
	          <button type="button" name="Bookmark" class="toggle" onclick="bookmark()">Bookmarks</button>
	          <button type="button" name="History" class="toggle" onclick="history()">History</button>
					</div>

						<table id="bookmark">
							<tbody>
								<tr>
									<td><h3>Parking Space 1</h3><p>Address</p></td>
								</tr>
                <tr>
									<td><h3>Parking Space 2</h3><p>Address</p></td>
								</tr>
                <tr>
									<td><h3>Parking Space 3</h3><p>Address</p></td>
								</tr>
							</tbody>
						</table>

						<table id="history" style="display: none">
							<tbody>
								<tr>
									<td><h3>Parking Space 1</h3><p>Address</p></td>
								</tr>
                <tr>
									<td><h3>Parking Space 2</h3><p>Address</p></td>
								</tr>
                <tr>
									<td><h3>Parking Space 3</h3><p>Address</p></td>
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

			var b = document.getElementById("bookmark");
			var h = document.getElementById("history");
			var btn = document.getElementById("btn");

			function history()
      {
				b.style.left = "-900px";
				h.style.left = "50px";
				btn.style.left = "126px";
				btn.style.width = "41%";
				b.style.display = "none";
				h.style.display = "flex";
				h.style.width= "100%";
      }

      function bookmark()
      {
				b.style.left = "50px";
				h.style.left = "450px";
				btn.style.left = "0";
				btn.style.width = "59%";
				h.style.display = "none";
				b.style.display = "flex";
				b.style.width= "100%";
      }
	</script>

	</body>
</html>
