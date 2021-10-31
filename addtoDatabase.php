<?php
session_start();
//Determine the definite number of products and their respective Quantity
if ($_POST['prod1'] == "R1"){
  if($_POST['u1'] == "S"){
    $itemID[0] = "R1S";
  }
  else if($_POST['u1'] == "K"){
    $itemID[0] = "R1K";
  }
}
else if ($_POST['prod1'] == "R2"){
  if($_POST['u1'] == "S"){
    $itemID[0] = "R2S";
  }
  else if($_POST['u1'] == "K"){
    $itemID[0] = "R2K";
  }
}
else if ($_POST['prod1'] == "R3"){
  if($_POST['u1'] == "S"){
    $itemID[0] = "R3S";
  }
  else if($_POST['u1'] == "K"){
    $itemID[0] = "R3K";
  }
}


if ($_POST['prod2'] == "R1"){
  if($_POST['u2'] == "S"){
    $itemID[1] = "R1S";
  }
  else if($_POST['u2'] == "K"){
    $itemID[1] = "R1K";
  }
}
else if ($_POST['prod2'] == "R2"){
  if($_POST['u2'] == "S"){
    $itemID[1] = "R2S";
  }
  else if($_POST['u2'] == "K"){
    $itemID[1] = "R2K";
  }
}
else if ($_POST['prod2'] == "R3"){
  if($_POST['u2'] == "S"){
    $itemID[1] = "R3S";
  }
  else if($_POST['u2'] == "K"){
    $itemID[1] = "R3K";
  }
}


if ($_POST['prod3'] == "R1"){
  if($_POST['u3'] == "S"){
    $itemID[2] = "R1S";
  }
  else if($_POST['u3'] == "K"){
    $itemID[2] = "R1K";
  }
}
else if ($_POST['prod3'] == "R2"){
  if($_POST['u3'] == "S"){
    $itemID[2] = "R2S";
  }
  else if($_POST['u3'] == "K"){
    $itemID[2] = "R2K";
  }
}
else if ($_POST['prod3'] == "R3"){
  if($_POST['u3'] == "S"){
    $itemID[2] = "R3S";
  }
  else if($_POST['u3'] == "K"){
    $itemID[2] = "R3K";
  }
}


if ($_POST['prod4'] == "R1"){
  if($_POST['u4'] == "S"){
    $itemID[3] = "R1S";
  }
  else if($_POST['u4'] == "K"){
    $itemID[3] = "R1K";
  }
}
else if ($_POST['prod4'] == "R2"){
  if($_POST['u4'] == "S"){
    $itemID[3] = "R2S";
  }
  else if($_POST['u4'] == "K"){
    $itemID[3] = "R2K";
  }
}
else if ($_POST['prod4'] == "R3"){
  if($_POST['u4'] == "S"){
    $itemID[3] = "R3S";
  }
  else if($_POST['u4'] == "K"){
    $itemID[3] = "R3K";
  }
}

if ($_POST['prod5'] == "R1"){
  if($_POST['u5'] == "S"){
    $itemID[4] = "R1S";
  }
  else if($_POST['u5'] == "K"){
    $itemID[4] = "R1K";
  }
}
else if ($_POST['prod5'] == "R2"){
  if($_POST['u5'] == "S"){
    $itemID[4] = "R2S";
  }
  else if($_POST['u5'] == "K"){
    $itemID[4] = "R2K";
  }
}
else if ($_POST['prod5'] == "R3"){
  if($_POST['u5'] == "S"){
    $itemID[4] = "R3S";
  }
  else if($_POST['u5'] == "K"){
    $itemID[4] = "R3K";
  }
}

$quant[0] = $_POST['q1'];
$quant[1] = $_POST['q2'];
$quant[2] = $_POST['q3'];
$quant[3] = $_POST['q4'];
$quant[4] = $_POST['q5'];


// Remove the duplicate item ID
$uitem = array_unique($itemID);
// Determine the duplicate item ID
$duplicate = array_diff_assoc($itemID,$uitem);
// Reset the index number
$uitem = array_values($uitem);
$duplicate = array_values($duplicate);
// Count all the number of items entered
$contItem = count($uitem);
// Initialization of quantity because it's showing error if not initialize >,<
for ($c=0; $c<$contItem; $c++){
  $q[$c]=0;
}
// Add up the quantity of the duplicate items
for ($i=0; $i<5; $i++){
  for ($j=0; $j<$contItem; $j++){
    if ($uitem[$j]==$itemID[$i]){
      $q[$j] += $quant[$i];
    }
  }
}

// Check if the form submitted by clicking on the Submit button
//if(isset($_POST['submitButton'])){
  $conn = mysqli_connect('localhost','root', '');
  // Check connection
  if(mysqli_connect_error())
  {
    echo 'MySQL Error: ' . mysqli_connect_error();
  }
  else{
    mysqli_select_db($conn, 'dborder');
  }

  $custID = $_POST['CustomerID'];
  $custName = $_POST['CustomerName'];
  $address = $_POST['Address'];
  $phone = $_POST['Phone'];
  $mobile = $_POST['Mobile'];
  $email = $_POST['EmailAddress'];

  $add1 = "INSERT INTO CUSTOMER(
    CUSTOMER_ID,
    CUSTOMER_NAME,
    ADDRESS,
    PHONE,
    MOBILE,
    EMAIL
  )
    VALUES(
      '$custID',
      '$custName',
      '$address',
      '$phone',
      '$mobile',
      '$email'
    )";

    if (mysqli_query($conn, $add1)) {
      echo "<script>alert('Customer added successfully!');</script>";
    }
    else {
      echo "<script>alert('Customer not added!');</script>";
    }

  $ordernum = $_POST['OrderNumber'];
  $orderdate = $_POST['OrderDate'];
  $total = $_POST['Total'];

  $add2 = "INSERT INTO ORDERS(
    ORDER_ID,
    ORDER_DATE,
    CUSTOMER_ID,
    TOTAL_ORDER_AMOUNT
    )
    VALUES(
      '$ordernum',
      '$orderdate',
      '$custID',
      '$total'
    )";

    if (mysqli_query($conn, $add2)) {
      echo "<script>alert('Order added successfully!');</script>";
    }
    else {
      echo "<script>alert('Order not added!');</script>";
    }

  for ($i=0; $i <$contItem; $i++) {
    $add[$i] = "INSERT INTO ORDERS_ITEM(
        ORDER_ID,
        ITEM_ID,
        ORDER_QTY
      )
      VALUES(
        '$ordernum',
        '$uitem[$i]',
        '$q[$i]'
      )";
    if (mysqli_query($conn, $add[$i])) {
      echo "<script>alert('Order item added successfully!');</script>";
    }
    else {
      echo "<script>alert('Order item not added!');</script>";
    }

    $currquant="SELECT INVENTORY_QUANTITY FROM ITEMS WHERE ITEM_ID ='$uitem[$i]'";
    $res = mysqli_query($currquant);
    $quant = mysqli_fetch_row($res);
    $itemQuant[$i] = $quant[0];
    $itemQuant[$i] = $itemQuant[$i] - $q[$i];
    //printf($itemQuant[$i]);


    $update[$i] = "UPDATE ITEMS SET INVENTORY_QUANTITY='' WHERE ITEM_ID='$itemQuant[$i]'";
    if (mysqli_query($conn, $update[$i])) {
      echo "<script>alert('Inventory updated! for".$uitem[$i]."');</script>";
    }
    else {
      echo "<script>alert('Not updated!');</script>";
    }
  }
  mysqli_close($conn);


header('location:order.php');
?>
