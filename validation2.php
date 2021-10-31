<?php

	session_start();

	$uname = $_POST['user'];
	$password = $_POST['password'];

	$con = mysqli_connect("localhost", '294227', 'ePy-b5W-rUj-Sod', '294227');
	if(mysqli_connect_error()){
	  echo 'MySQL Error: ' . mysqli_connect_error();
	}
	else{
	}
	mysqli_select_db($con, "294227");

	$s = "SELECT * FROM usertable WHERE username = '$uname' && password = '$password'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	$row = mysqli_query($con, $s);
	$data = mysqli_fetch_array($row);
	$firstName = $data['fName'];
	$midName = $data['mName'];
	$lastName = $data['lName'];
	$email = $data['emailAdd'];
	$category = $data['category'];
	$cpname = $data['cpName'];
	$cpadd = $data['cpAdd'];


	if($num == 1)
	{
		$_SESSION['username'] = $uname;
		$_SESSION['password'] = $password;
		$_SESSION['fname'] = $firstName;
		$_SESSION['mname'] = $midName;
		$_SESSION['lname'] = $lastName;
		$_SESSION['emailAdd'] = $email;
		$_SESSION['category'] = $category;
		$_SESSION['cpName'] = $cpname;
		$_SESSION['cpAdd'] = $cpadd;
		header('location:myaccount.php');
	}

	else
	{
	header('location:login2.php');
	}

	mysqli_close($con);
?>
