<?php
	session_start();

	$conn = mysqli_connect('localhost','root');
	if(mysqli_connect_error()){
	  echo 'MySQL Error: ' . mysqli_connect_error();
	}
	else{
	}
	mysqli_select_db($conn,"USERS");
	if(mysqli_connect_error()){
	  echo 'MySQL Error: ' . mysqli_connect_error().'</br>';
	}
	else{
	}
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$check = "SELECT * FROM information WHERE USERNAME='$uname' && PASSWORD='$pword'";
	$result = mysqli_query($conn,$check);
	$exist = mysqli_num_rows($result);
	if ($exist==1) {
		echo "<script>alert('Login successful!');</script>";
		$_SESSION['username'] = $uname;
		$_SESSION['password'] = $pword;
		header('location: order.php');
	}
	else {
		echo "<script>alert('Error login!');</script>";
		header('location:index.php');
	}
	mysqli_close($conn);
?>
