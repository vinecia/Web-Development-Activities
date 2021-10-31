<?php
  session_start();

  $con = mysqli_connect('localhost', 'root');
  if(mysqli_connect_error()){
	  echo 'MySQL Error: ' . mysqli_connect_error();
	}
	else{
	}
  mysqli_select_db($con, "userregistration");

  $carparkid = $_POST['carparkid'];
  $carparkname = $_POST['carparkname'];
  $username = $_SESSION['username'];

  echo $carparkid . '</br>' . $carparkname . '</br>'. $username;
  /*
  $s = "SELECT * FROM usertable WHERE username = '$username'";

	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo "This ";
	}

	else
	{
		$reg = "insert into userhistory(user, car) values('$username', '$carparkid')";
		mysqli_query($con, $reg);
		echo "SUCCESS";
	}*/
	mysqli_close($con);

?>
