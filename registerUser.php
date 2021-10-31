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
$check = "SELECT * FROM information where USERNAME='$uname'";
$result = mysqli_query($conn,$check);
$exist = mysqli_num_rows($result);
if ($exist==1){
    echo "<script>alert('Username already exists!');</script>";
}
else{
  $reg = "INSERT INTO INFORMATION(
      USERNAME,
      PASSWORD)
    VALUES(
      '$uname',
      '$pword'
    )";
  if(mysqli_query($conn,$reg)){
    echo "<script>alert('Registration successful!');</script>";
    header('location: index.php');
  }
  else{
    echo "<script>alert('Error!');</script>";
  }
}
?>
