<?php

	session_start();
	session_destroy();

	echo '<script >alert("You have successfully logged out!"); </script>';
	header('location: index.php');
?>
