
<?php
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		header("location:order.php");
	}

  $conn = mysqli_connect('localhost','root');
  if(mysqli_connect_error()){
  	echo 'MySQL Error: ' . mysqli_connect_error();
  }
  else{
  	$query = 'CREATE DATABASE IF NOT EXISTS DBORDER';
  	if(mysqli_query($conn,$query)){
  //		echo "<script>alert('Database created successfully!');</script>";
  	}
  	else{
  	//	echo "<script>alert('Database can't be created!');</script>";
  	}
  }

  // Connecting to the created database
  mysqli_select_db($conn,"DBORDER");
  if(mysqli_connect_error()){
  	echo 'MySQL Error: ' . mysqli_connect_error().'</br>';
  }
  else{
    // Creating the table for the DATABASE

  	$query2 = 'CREATE TABLE IF NOT EXISTS CUSTOMER(
    	CUSTOMER_ID char(5),
    	CUSTOMER_NAME varchar(50),
    	ADDRESS varchar(100),
    	PHONE char(8),
    	MOBILE char(11),
    	EMAIL varchar(40),
      PRIMARY KEY (CUSTOMER_ID)
  	)';

  	$query3 = 'CREATE TABLE IF NOT EXISTS ORDERS(
    	ORDER_ID char(7),
    	ORDER_DATE date,
    	CUSTOMER_ID char(5),
    	TOTAL_ORDER_AMOUNT decimal(9, 2),
      PRIMARY KEY (ORDER_ID),
  		FOREIGN KEY (CUSTOMER_ID) REFERENCES customer(CUSTOMER_ID)
  	)';

  	$query4 = 'CREATE TABLE IF NOT EXISTS ITEMS(
    	ITEM_ID varchar(10),
    	ITEM_NAME varchar(50),
    	DESCRIPTION varchar(100),
    	UNIT_PRICE decimal(9, 2),
    	INVENTORY_QUANTITY int(3),
      PRIMARY KEY (ITEM_ID)
  	)';

  	$query5 = 'CREATE TABLE IF NOT EXISTS ORDERS_ITEM(
  		ORDER_ID char(7),
  		ITEM_ID varchar(10),
  		ORDER_QTY int(3),
  		FOREIGN KEY(ORDER_ID) REFERENCES orders(ORDER_ID),
  		FOREIGN KEY(ITEM_ID) REFERENCES items(ITEM_ID)
  	)';

  	if(mysqli_query($conn,$query2)){
    //  echo "<script>alert('Table CUSTOMER created successfully!');</script>";
    }
  		else{
  			//echo "<script>alert('Table CUSTOMER can't be created!');</script>";
  	  }
    if(mysqli_query($conn,$query3)){
    //	echo "<script>alert('Table ORDERS created successfully!');</script>";
    }
  		else{
  	  	//echo "<script>alert('Table ORDERS can't be created!');</script>";
  	  }
    if(mysqli_query($conn,$query4)){
    //	echo "<script>alert('Table ITEMS created successfully!');</script>";
    }
  		else{
  	  	//echo "<script>alert('Table ITEMS can't be created!');</script>";
  	  }
    if(mysqli_query($conn,$query5)){
    //	echo "<script>alert('Table ORDERS_ITEM created successfully!');</script>";
    }
  	  else{
  	  	//echo "<script>alert('Table ORDERS_ITEM can't be created!');</script>";
  	  }

    // Adding the information of the items to the DATABASE

    $add4 = 'INSERT INTO ITEMS(
        ITEM_ID,
        ITEM_NAME,
        DESCRIPTION,
        UNIT_PRICE,
        INVENTORY_QUANTITY
      )
      VALUES(
        "R1K",
        "Dinorado - Kilo",
        "Dinorado Rice per Kilo",
        "45.00",
        "100"
      )';

      if (mysqli_query($conn, $add4)) {
  		//	echo "<script>alert('Item added!');</script>";
      }
      else {
        //echo "<script>alert('Item not added because it is existing!');</script>";
      }

    $add5 = 'INSERT INTO ITEMS(
        ITEM_ID,
        ITEM_NAME,
        DESCRIPTION,
        UNIT_PRICE,
        INVENTORY_QUANTITY
      )
      VALUES(
        "R1S",
        "Dinorado - Sack",
        "Dinorado Rice per Sack",
        "1200.00",
        "100"
      )';

      if (mysqli_query($conn, $add5)) {
  		//	echo "<script>alert('Item added!');</script>";
      }
      else {
        //echo "<script>alert('Item not added because it is existing!');</script>";
      }

      $add6 = 'INSERT INTO ITEMS(
          ITEM_ID,
          ITEM_NAME,
          DESCRIPTION,
          UNIT_PRICE,
          INVENTORY_QUANTITY
        )
        VALUES(
          "R2K",
          "Jasmine - Kilo",
          "Jasmine Rice per Kilo",
          "50.00",
          "100"
        )';

        if (mysqli_query($conn, $add6)) {
  			//	echo "<script>alert('Item added!');</script>";
        }
        else {
  				//echo "<script>alert('Item not added because it is existing!');</script>";
        }

      $add7 = 'INSERT INTO ITEMS(
          ITEM_ID,
          ITEM_NAME,
          DESCRIPTION,
          UNIT_PRICE,
          INVENTORY_QUANTITY
        )
        VALUES(
          "R2S",
          "Jasmine - Sack",
          "Jasmine Rice per Sack",
          "1270.00",
          "100"
        )';

        if (mysqli_query($conn, $add7)) {
  			//	echo "<script>alert('Item added!');</script>";
        }
        else {
  				//echo "<script>alert('Item not added because it is existing!');</script>";
        }

        $add8 = 'INSERT INTO ITEMS(
            ITEM_ID,
            ITEM_NAME,
            DESCRIPTION,
            UNIT_PRICE,
            INVENTORY_QUANTITY
          )
          VALUES(
            "R3K",
            "Sinandomeng - Kilo",
            "Sinandomeng Rice per Kilo",
            "55.00",
            "100"
          )';

        if (mysqli_query($conn, $add8)) {
  			//	echo "<script>alert('Item added!');</script>";
        }
        else {
  				//echo "<script>alert('Item not added because it is existing!');</script>";
        }

        $add9 = 'INSERT INTO ITEMS(
            ITEM_ID,
            ITEM_NAME,
            DESCRIPTION,
            UNIT_PRICE,
            INVENTORY_QUANTITY
          )
          VALUES(
            "R3S",
            "Sinandomeng - Sack",
            "Sinandomeng Rice per Sack",
            "1400.00",
            "100"
          )';

          if (mysqli_query($conn, $add9)) {
  				//	echo "<script>alert('Item added!');</script>";
          }
          else {
  					//echo "<script>alert('Item not added because it is existing!');</script>";
          }
  }

  mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>
    </br></br></br></br></br>
    <center>
    <div style="border: 1px solid black; width: 30%;">
    </br><center><h3>Login Page</h3></br>
      <form class="" action="verifyLogin.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" value="" required></br></br>
        <label for="password">Password: </label>
        <input type="password" name="password" value="" required></br></br>
        <input type="submit" name="submitButton" value="Login"></br></br>
        <input type="button" name="registerButton" value="Register" onclick="window.location.href='register.php'"></br></br></br>
      </form></center>
    </div>
  </body>
</html>
