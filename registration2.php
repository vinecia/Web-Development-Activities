<?php

	session_start();
	header('location:login2.php');

	$con = mysqli_connect("localhost", '294227', 'ePy-b5W-rUj-Sod', '294227');
	if(mysqli_connect_error()){
	  echo 'MySQL Error: ' . mysqli_connect_error();
	}
	else{
	}
	mysqli_select_db($con, '294227');

	$fName = $_POST['fName'];
	$mName = $_POST['mName'];
	$lName = $_POST['lName'];
	$emailAdd = $_POST['emailAdd'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$category = $_POST['category'];
	$cpName = $_POST['cpName'];
	$cpAdd = $_POST['cpAdd'];

	$s = "select * from usertable where username = '$username'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo '<script> alert("The username is already taken!"); </script>';
	}

	else
	{
		$reg = "insert into usertable(fName, mName, lName, emailAdd, username, password, category, cpName, cpAdd) values('$fName', '$mName', '$lName', '$emailAdd', '$username', '$password', '$category', '$cpName', '$cpAdd')";
		mysqli_query($con, $reg);
		echo '<script> alert("You have successfully registered!"); </script>';
	}
	mysqli_close($con);
?>
