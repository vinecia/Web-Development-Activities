<?php
$conn = mysqli_connect('localhost','root');
if(mysqli_connect_error()){
  echo 'MySQL Error: ' . mysqli_connect_error();
}
else{
  $query = 'CREATE DATABASE IF NOT EXISTS USERS';
  if(mysqli_query($conn,$query)){
//		echo "<script>alert('Database created successfully!');</script>";
  }
  else{
  //	echo "<script>alert('Database can't be created!');</script>";
  }
}
mysqli_select_db($conn,"users");
if(mysqli_connect_error()){
  echo 'MySQL Error: ' . mysqli_connect_error().'</br>';
}
else{
}
$query = 'CREATE TABLE IF NOT EXISTS INFORMATION(
  USERNAME varchar(20),
  PASSWORD varchar(50)
)';
if(mysqli_query($conn,$query)){
  //
}
else{
  //
}
mysqli_close($conn);
?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Register Page</title>
  </head>
  <body>
    </br></br></br></br></br>
    <center>
    <div style="border: 1px solid black; width: 30%;">
    </br><center><h3>Register Page</h3></br>
      <form class="" action="registerUser.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Enter username" required></br></br>
        <label for="password">Password: </label>
        <input type="password" placeholder="Enter desired password" name="password" required></br></br>
        <input type="submit" name="registerButton" value="Register"></br></br>
      <a href="index.php">Go back to login page</a></br></br>
    </br>
      </form></center>
    </div>
  </body>
</html>
