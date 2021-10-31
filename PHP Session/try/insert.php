<?php
$conn = mysqli_connect('localhost','root','','newdb');
if(mysqli_connect_error()){
  echo 'MySQL Error: ' . mysqli_connect_error();
}
else{
  $query = "INSERT INTO person VALUES('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";
  if(mysqli_query($conn,$query)){
  echo '1 Record added successfully.'; }else{ echo 'Error record not added.'; }
}
?>
