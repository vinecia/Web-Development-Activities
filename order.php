<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
		<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Order Form</title>
  </head>
  <body>

    <form class="" action="addtoDatabase.php" method="post">
      <div class="div1">
      <a href="logout.php" style="float:right;">Logout</a>
      <h3>Order Form</h3>
      <div class="div1" style="border:1px solid blue;">
        <div class="div2"><h3>Customer</h3></div>
  			<div class="div3"><label for="OrderDate">Order Date: </label><input type="date" name="OrderDate" value="" size="10" maxlength="6" /></div><br>
  			<div class="div2">
				</br><label for="CustomerID">Customer ID:</label><input type="number" name="CustomerID" value="1" /></div>
  			<div class="div3"><label for="OrderNumber">Order Number: </label><input type="text" id="ordernum" name="OrderNumber" value="0000001" size="10" maxlength="7" readonly /></div><br><br><br>

  			<label class="label1" for="CustomerName">Customer Name: </label>
  			<input type="text" name="CustomerName" value="" size="30" maxlength="50" required /><br>
  			<label class="label1" for="Address">Address: </label>
  			<input type="text" name="Address" value="" size="65" maxlength="100" required /><br>
  			<label class="label1" for="Phone">Phone: </label>
  			<input type="tel" name="Phone" value="" size="15" maxlength="8" required />
  			<label class="label1" for="Mobile">Mobile: </label>
  			<input type="text" name="Mobile" value="" size="15" maxlength="11" placeholder="09XXXXXXXXX" /><br>
  			<label class="label1" for="EmailAddress">Email Address: </label>
  			<input type="email" name="EmailAddress" value="" size="23" maxlength="40" /></br></br></br>
  		</div>
    </div>
  </br></br></br></br>
  		<div class="div1">
  			<h3>Products to Order</h3>
  			<table style="border:1px solid gray;margin-left:auto;margin-right:auto;">
  				<thead style="color:white; background-color: #3b7aba;">
  					<th>Unit</th>
  					<th>Quantity</th>
  					<th>Product Code</th>
  					<th>Description</th>
  					<th>Unit Price</th>
  					<th>Total Price</th>
  				</thead>
  				<tbody style="text-align:center; background-color:#d5eaff">
  					<tr>
  						<td>
  							<select id="unit1" name="u1" onchange="displayPrice1()">
  								<option value='CH' selected>Choose</option>
  								<option value="S">Sack</option>
  								<option value="K">Kilo</option>
  							</select>
  						</td>
  						<td>
  							<input type="number" id="quant1" name="q1" value="1" min="1" style="width: 4em" onclick="totalP()" />
  						</td>
  						<td>
  							<select id="productcode1" name="prod1" onchange="displayDesc()" >
  								<option value="CH" selected>Choose</option>
  								<option value="R1">R1</option>
  								<option value="R2">R2</option>
  								<option value="R3">R3</option>
  							</select>
  							<script>
  								function displayDesc() {
  									var pcode1 = document.getElementById("productcode1").value;
  									var u1 = document.getElementById("unit1").value;
  									if (pcode1 == "R1"){
  										document.getElementById("desc1").value = "Dinorado";
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1200.00";
  											document.getElementById("totalprice1").value = "1200.00"
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "45.00";
  											document.getElementById("totalprice1").value = "45.00";
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode1 == "R2"){
  										document.getElementById("desc1").value = "Jasmine";
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1270.00";
  											document.getElementById("totalprice1").value = "1270.00";
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "50.00";
  											document.getElementById("totalprice1").value = "50.00";
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode1 == "R3"){
  										document.getElementById("desc1").value = "Sinandomeng";
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1400.00";
  											document.getElementById("totalprice1").value = "1400.00";
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "55.00";
  											document.getElementById("totalprice1").value = "55.00"
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "";
                        alert('Select a unit');
  										}
  									}
  									else{
  										document.getElementById("desc1").value = "";
  										document.getElementById("quant1").value = "1";
  										document.getElementById("unit1").value = "CH";
  										document.getElementById("unitprice1").value = "";
  										document.getElementById("totalprice1").value = "0";
                      alert('Select a unit');
  									}
  								}

  								function displayPrice1() {
  									var prod1 = document.getElementById("productcode1").value;
  									var u1 = document.getElementById("unit1").value;
  									if (prod1 == "R1"){
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1200.00";
  											document.getElementById("totalprice1").value = "1200.00"
  											document.getElementById("quant1").value = "1";
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "45.00";
  											document.getElementById("totalprice1").value = "45.00";
  											document.getElementById("quant1").value = "1";
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "";
  											document.getElementById("quant1").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod1 == "R2"){
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1270.00";
  											document.getElementById("totalprice1").value = "1270.00";
  											document.getElementById("quant1").value = "1";
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "50.00";
  											document.getElementById("totalprice1").value = "50.00";
  											document.getElementById("quant1").value = "1";
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "";
  											document.getElementById("quant1").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod1 == "R3"){
  										if(u1 == "S"){
  											document.getElementById("unitprice1").value = "1400.00";
  											document.getElementById("totalprice1").value = "1400.00";
  											document.getElementById("quant1").value = "1";
  										}
  										else if (u1 == "K"){
  											document.getElementById("unitprice1").value = "55.00";
  											document.getElementById("totalprice1").value = "55.00"
  											document.getElementById("quant1").value = "1";
  										}
  										else{
  											document.getElementById("unitprice1").value = "";
  											document.getElementById("totalprice1").value = "0";
  											document.getElementById("quant1").value = "1";
                        alert('Select a product');
  										}
  									}
  									else {
  										document.getElementById("unitprice1").value = "";
  										document.getElementById("totalprice1").value = "0";
  										document.getElementById("quant1").value = "1";
                      alert('Select a product');
  									}
  								}

  								function totalP() {
  									var up1 = document.getElementById("unitprice1").value;
  									var quan1 = document.getElementById("quant1").value;
  									var tot1 = parseFloat(up1) * parseFloat(quan1);
  									document.getElementById("totalprice1").value = tot1;

                    var tot2 = 0;
                    tot2 = document.getElementById("totalprice2").value;
                    var tot3 = 0;
                    tot3 = document.getElementById("totalprice3").value;
                    var tot4 = 0;
                    tot4 = document.getElementById("totalprice4").value;
                    var tot5 = 0;
                    tot5 = document.getElementById("totalprice5").value;
  									var overallTotal1 = tot1 + parseFloat(tot2) + parseFloat(tot3) + parseFloat(tot4) + parseFloat(tot5);
  									document.getElementById("totalamount").value = overallTotal1;
  								}
  							</script>
  						</td>
  						<td>
  							<input type="text" id="desc1" value="" size="30" maxlength="30" readonly />
  						</td>
  						<td>
  							<input type="text" id="unitprice1" value="" size="8" maxlength="7" readonly />
  						</td>
  						<td>
  							<input type="text" id="totalprice1" value="0" size="12" maxlength="10" readonly />
  						</td>
  					</tr>

  					<tr>
  						<td>
  							<select id="unit2" name="u2" onchange="displayPrice2()">
  								<option value='CH' selected>Choose</option>
  								<option value="S">Sack</option>
  								<option value="K">Kilo</option>
  							</select>
  						</td>
  						<td>
  							<input type="number" id="quant2" name="q2" value="1" min="1" style="width: 4em" onclick="totalP2()" />
  						</td>
  						<td>
  							<select id="productcode2" name="prod2" onchange="displayDesc2()" >
  								<option value="CH" selected>Choose</option>
  								<option value="R1">R1</option>
  								<option value="R2">R2</option>
  								<option value="R3">R3</option>
  							</select>
  							<script>
  								function displayDesc2() {
  									var pcode2 = document.getElementById("productcode2").value;
  									var u2 = document.getElementById("unit2").value;
  									if (pcode2 == "R1"){
  										document.getElementById("desc2").value = "Dinorado";
  										if (prod2 == "R1"){
  											if(u2 == "S"){
  												document.getElementById("unitprice2").value = "1200.00";
  												document.getElementById("totalprice2").value = "1200.00"
  											}
  											else if (u2 == "K"){
  												document.getElementById("unitprice2").value = "45.00";
  												document.getElementById("totalprice2").value = "45.00";
  											}
  											else{
  												document.getElementById("unitprice2").value = "";
  												document.getElementById("totalprice2").value = "0";
                          alert('Select a unit');
  											}
  										}
  									}
  									else if (pcode2 == "R2"){
  										document.getElementById("desc2").value = "Jasmine";
  										if(u2 == "S"){
  											document.getElementById("unitprice2").value = "1270.00";
  											document.getElementById("totalprice2").value = "1270.00";
  										}
  										else if (u2 == "K"){
  											document.getElementById("unitprice2").value = "50.00";
  											document.getElementById("totalprice2").value = "50.00";
  										}
  										else{
  											document.getElementById("unitprice2").value = "";
  											document.getElementById("totalprice2").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode2 == "R3"){
  										document.getElementById("desc2").value = "Sinandomeng";
  										if(u2 == "S"){
  											document.getElementById("unitprice2").value = "1400.00";
  											document.getElementById("totalprice2").value = "1400.00";
  										}
  										else if (u2 == "K"){
  											document.getElementById("unitprice2").value = "55.00";
  											document.getElementById("totalprice2").value = "55.00"
  										}
  										else{
  											document.getElementById("unitprice2").value = "";
  											document.getElementById("totalprice2").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else{
  										document.getElementById("desc2").value = "";
  										document.getElementById("quant2").value = "1";
  										document.getElementById("unit2").value = "CH";
  										document.getElementById("unitprice2").value = "";
  										document.getElementById("totalprice2").value = "0";
                      alert('Select a unit');
  									}
  								}

  								function displayPrice2() {
  									var prod2 = document.getElementById("productcode2").value;
  									var u2 = document.getElementById("unit2").value;
  									if (prod2 == "R1"){
  										if(u2 == "S"){
  											document.getElementById("unitprice2").value = "1200.00";
  											document.getElementById("totalprice2").value = "1200.00"
  											document.getElementById("quant2").value = "1";
  										}
  										else if (u2 == "K"){
  											document.getElementById("unitprice2").value = "45.00";
  											document.getElementById("totalprice2").value = "45.00";
  											document.getElementById("quant2").value = "1";
  										}
  										else{
  											document.getElementById("unitprice2").value = "";
  											document.getElementById("totalprice2").value = "0";
  											document.getElementById("quant2").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod2 == "R2"){
  										if(u2 == "S"){
  											document.getElementById("unitprice2").value = "1270.00";
  											document.getElementById("totalprice2").value = "1270.00";
  											document.getElementById("quant2").value = "1";
  										}
  										else if (u2 == "K"){
  											document.getElementById("unitprice2").value = "50.00";
  											document.getElementById("totalprice2").value = "50.00";
  											document.getElementById("quant2").value = "1";
  										}
  										else{
  											document.getElementById("unitprice2").value = "";
  											document.getElementById("totalprice2").value = "0";
  											document.getElementById("quant2").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod2 == "R3"){
  										if(u2 == "S"){
  											document.getElementById("unitprice2").value = "1400.00";
  											document.getElementById("totalprice2").value = "1400.00";
  											document.getElementById("quant2").value = "1";
  										}
  										else if (u2 == "K"){
  											document.getElementById("unitprice2").value = "55.00";
  											document.getElementById("totalprice2").value = "55.00"
  											document.getElementById("quant2").value = "1";
  										}
  										else{
  											document.getElementById("unitprice2").value = "";
  											document.getElementById("totalprice2").value = "0";
  											document.getElementById("quant2").value = "1";
                        alert('Select a product');
  										}
  									}
  									else {
  										document.getElementById("unitprice2").value = "";
  										document.getElementById("totalprice2").value = "0";
  										document.getElementById("quant2").value = "1";
                      alert('Select a product');
  									}
  								}

  								function totalP2() {
  									var up2 = document.getElementById("unitprice2").value;
  									var quan2 = document.getElementById("quant2").value;
  									var tot2 = parseFloat(up2) * parseFloat(quan2);
  									document.getElementById("totalprice2").value = tot2;

                    var tott1 = 0;
                    tott1 = document.getElementById("totalprice1").value;
                    var tott3 = 0;
                    tott3 = document.getElementById("totalprice3").value;
                    var tott4 = 0;
                    tott4 = document.getElementById("totalprice4").value;
                    var tott5 = 0;
                    tott5 = document.getElementById("totalprice5").value;
  									var overallTotal2 = parseFloat(tott1) + tot2 + parseFloat(tott3) + parseFloat(tott4) + parseFloat(tott5);
  									document.getElementById("totalamount").value = overallTotal2;
  								}
  							</script>
  						</td>
  						<td>
  							<input type="text" id="desc2" value="" size="30" maxlength="30" readonly />
  						</td>
  						<td>
  							<input type="text" id="unitprice2" value="" size="8" maxlength="7" readonly />
  						</td>
  						<td>
  							<input type="text" id="totalprice2" value="0" size="12" maxlength="10" readonly />
  						</td>
  					</tr>

  					<tr>
  						<td>
  							<select id="unit3" name="u3" onchange="displayPrice3()">
  								<option value='CH' selected>Choose</option>
  								<option value="S">Sack</option>
  								<option value="K">Kilo</option>
  							</select>
  						</td>
  						<td>
  							<input type="number" name="q3" id="quant3" value="1" min="1" style="width: 4em" onclick="totalP3()" />
  						</td>
  						<td>
  							<select id="productcode3" name="prod3" onchange="displayDesc3()" >
  								<option value="CH" selected>Choose</option>
  								<option value="R1">R1</option>
  								<option value="R2">R2</option>
  								<option value="R3">R3</option>
  							</select>
  							<script>
  								function displayDesc3() {
  									var pcode3 = document.getElementById("productcode3").value;
  									var u3 = document.getElementById("unit3").value;
  									if (pcode3 == "R1"){
  										document.getElementById("desc3").value = "Dinorado";
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1200.00";
  											document.getElementById("totalprice3").value = "1200.00"
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "45.00";
  											document.getElementById("totalprice3").value = "45.00";
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode3 == "R2"){
  										document.getElementById("desc3").value = "Jasmine";
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1270.00";
  											document.getElementById("totalprice3").value = "1270.00";
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "50.00";
  											document.getElementById("totalprice3").value = "50.00";
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode3 == "R3"){
  										document.getElementById("desc3").value = "Sinandomeng";
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1400.00";
  											document.getElementById("totalprice3").value = "1400.00";
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "55.00";
  											document.getElementById("totalprice3").value = "55.00"
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else{
  										document.getElementById("desc3").value = "";
  										document.getElementById("quant3").value = "1";
  										document.getElementById("unit3").value = "CH";
  										document.getElementById("unitprice3").value = "";
  										document.getElementById("totalprice3").value = "0";
                      alert('Select a unit');
  									}
  								}

  								function displayPrice3() {
  									var prod3 = document.getElementById("productcode3").value;
  									var u3 = document.getElementById("unit3").value;
  									if (prod3 == "R1"){
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1200.00";
  											document.getElementById("totalprice3").value = "1200.00"
  											document.getElementById("quant3").value = "1";
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "45.00";
  											document.getElementById("totalprice3").value = "45.00";
  											document.getElementById("quant3").value = "1";
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
  											document.getElementById("quant3").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod3 == "R2"){
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1270.00";
  											document.getElementById("totalprice3").value = "1270.00";
  											document.getElementById("quant3").value = "1";
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "50.00";
  											document.getElementById("totalprice3").value = "50.00";
  											document.getElementById("quant3").value = "1";
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
  											document.getElementById("quant3").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod3 == "R3"){
  										if(u3 == "S"){
  											document.getElementById("unitprice3").value = "1400.00";
  											document.getElementById("totalprice3").value = "1400.00";
  											document.getElementById("quant3").value = "1";
  										}
  										else if (u3 == "K"){
  											document.getElementById("unitprice3").value = "55.00";
  											document.getElementById("totalprice3").value = "55.00"
  											document.getElementById("quant3").value = "1";
  										}
  										else{
  											document.getElementById("unitprice3").value = "";
  											document.getElementById("totalprice3").value = "0";
  											document.getElementById("quant3").value = "1";
                        alert('Select a product');
  										}
  									}
  									else {
  										document.getElementById("unitprice3").value = "";
  										document.getElementById("totalprice3").value = "0";
  										document.getElementById("quant3").value = "1";
                      alert('Select a product');
  									}
  								}

  								function totalP3() {
  									var up3 = document.getElementById("unitprice3").value;
  									var quan3 = document.getElementById("quant3").value;
  									var tot3 = parseFloat(up3) * parseFloat(quan3);
  									document.getElementById("totalprice3").value = tot3;

                    var tottt1 = 0;
  									tottt1 = document.getElementById("totalprice1").value;
                    var tottt2 = 0;
                    tottt2 = document.getElementById("totalprice2").value;
                    var tottt4 = 0;
                    tottt4 = document.getElementById("totalprice4").value;
                    var tottt5 = 0;
                    tottt5 = document.getElementById("totalprice5").value;
  									var overallTotal3 = parseFloat(tottt1) + parseFloat(tottt2) + tot3 + parseFloat(tottt4) + parseFloat(tottt5);
  									document.getElementById("totalamount").value = overallTotal3;
  								}
  							</script>
  						</td>
  						<td>
  							<input type="text" id="desc3" value="" size="30" maxlength="30" readonly />
  						</td>
  						<td>
  							<input type="text" id="unitprice3" value="" size="8" maxlength="7" readonly />
  						</td>
  						<td>
  							<input type="text" id="totalprice3" value="0" size="12" maxlength="10" readonly />
  						</td>
  					</tr>

  					<tr>
  						<td>
  							<select id="unit4" name="u4" onchange="displayPrice4()">
  								<option value='CH' selected>Choose</option>
  								<option value="S">Sack</option>
  								<option value="K">Kilo</option>
  							</select>
  						</td>
  						<td>
  							<input type="number" name="q4" id="quant4" value="1" min="1" style="width: 4em" onclick="totalP4()" />
  						</td>
  						<td>
  							<select id="productcode4" name="prod4" onchange="displayDesc4()" >
  								<option value="CH" selected>Choose</option>
  								<option value="R1">R1</option>
  								<option value="R2">R2</option>
  								<option value="R3">R3</option>
  							</select>
  							<script>
  								function displayDesc4() {
  									var pcode4 = document.getElementById("productcode4").value;
  									var u4 = document.getElementById("unit4").value;
  									if (pcode4 == "R1"){
  										document.getElementById("desc4").value = "Dinorado";
  										document.getElementById("quant5").value = "1";
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1200.00";
  											document.getElementById("totalprice4").value = "1200.00"
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "45.00";
  											document.getElementById("totalprice4").value = "45.00";
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode4 == "R2"){
  										document.getElementById("desc4").value = "Jasmine";
  										document.getElementById("quant5").value = "1";
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1270.00";
  											document.getElementById("totalprice4").value = "1270.00";
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "50.00";
  											document.getElementById("totalprice4").value = "50.00";
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode4 == "R3"){
  										document.getElementById("desc4").value = "Sinandomeng";
  										document.getElementById("quant5").value = "1";
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1400.00";
  											document.getElementById("totalprice4").value = "1400.00";
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "55.00";
  											document.getElementById("totalprice4").value = "55.00"
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else{
  										document.getElementById("desc4").value = "";
  										document.getElementById("quant4").value = "1";
  										document.getElementById("unit4").value = "CH";
  										document.getElementById("unitprice4").value = "";
  										document.getElementById("totalprice4").value = "0";
                      alert('Select a unit');
  									}
  								}

  								function displayPrice4() {
  									var prod4 = document.getElementById("productcode4").value;
  									var u4 = document.getElementById("unit4").value;
  									if (prod4 == "R1"){
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1200.00";
  											document.getElementById("totalprice4").value = "1200.00"
  											document.getElementById("quant4").value = "1";
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "45.00";
  											document.getElementById("totalprice4").value = "45.00";
  											document.getElementById("quant4").value = "1";
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
  											document.getElementById("quant4").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod4 == "R2"){
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1270.00";
  											document.getElementById("totalprice4").value = "1270.00";
  											document.getElementById("quant4").value = "1";
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "50.00";
  											document.getElementById("totalprice4").value = "50.00";
  											document.getElementById("quant4").value = "1";
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
  											document.getElementById("quant4").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod4 == "R3"){
  										if(u4 == "S"){
  											document.getElementById("unitprice4").value = "1400.00";
  											document.getElementById("totalprice4").value = "1400.00";
  											document.getElementById("quant4").value = "1";
  										}
  										else if (u4 == "K"){
  											document.getElementById("unitprice4").value = "55.00";
  											document.getElementById("totalprice4").value = "55.00"
  											document.getElementById("quant4").value = "1";
  										}
  										else{
  											document.getElementById("unitprice4").value = "";
  											document.getElementById("totalprice4").value = "0";
  											document.getElementById("quant4").value = "1";
                        alert('Select a product');
  										}
  									}
  									else {
  										document.getElementById("unitprice4").value = "";
  										document.getElementById("totalprice4").value = "0";
  										document.getElementById("quant5").value = "1";
                      alert('Select a product');
  									}
  								}

  								function totalP4() {
  									var up4 = document.getElementById("unitprice4").value;
  									var quan4 = document.getElementById("quant4").value;
  									var tot4 = parseFloat(up4) * parseFloat(quan4);
  									document.getElementById("totalprice4").value = tot4;

                    var tottt1 = 0;
                    tottt1 = document.getElementById("totalprice1").value;
                    var tottt2 = 0;
                    tottt2 = document.getElementById("totalprice2").value;
                    var tottt3 = 0;
                    tottt3 = document.getElementById("totalprice3").value;
                    var tottt5 = 0;
                    tottt5 = document.getElementById("totalprice5").value;
  									var overallTotal4 = parseFloat(tottt1) + parseFloat(tottt2) + parseFloat(tottt3) + tot4 + parseFloat(tottt5);
  									document.getElementById("totalamount").value = overallTotal4;
  								}
  							</script>
  						</td>
  						<td>
  							<input type="text" id="desc4" value="" size="30" maxlength="30" readonly />
  						</td>
  						<td>
  							<input type="text" id="unitprice4" value="" size="8" maxlength="7" readonly />
  						</td>
  						<td>
  							<input type="text" id="totalprice4" value="0" size="12" maxlength="10" readonly />
  						</td>
  					</tr>

  					<tr>
  						<td>
  							<select id="unit5" name="u5" onchange="displayPrice5()">
  								<option value='CH' selected>Choose</option>
  								<option value="S">Sack</option>
  								<option value="K">Kilo</option>
  							</select>
  						</td>
  						<td>
  							<input type="number" name="q5" id="quant5" value="1" min="1" style="width: 4em" onclick="totalP5()" />
  						</td>
  						<td>
  							<select id="productcode5" name="prod5" onchange="displayDesc5()" >
  								<option value="CH" selected>Choose</option>
  								<option value="R1">R1</option>
  								<option value="R2">R2</option>
  								<option value="R3">R3</option>
  							</select>
  							<script>
  								function displayDesc5() {
  									var pcode5 = document.getElementById("productcode5").value;
  									var u5 = document.getElementById("unit5").value;
  									if (pcode5 == "R1"){
  										document.getElementById("desc5").value = "Dinorado";
  										document.getElementById("quant5").value = "1";
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1200.00";
  											document.getElementById("totalprice5").value = "1200.00"
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "45.00";
  											document.getElementById("totalprice5").value = "45.00";
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode5 == "R2"){
  										document.getElementById("desc5").value = "Jasmine";
  										document.getElementById("quant5").value = "1";
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1270.00";
  											document.getElementById("totalprice5").value = "1270.00";
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "50.00";
  											document.getElementById("totalprice5").value = "50.00";
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else if (pcode5 == "R3"){
  										document.getElementById("desc5").value = "Sinandomeng";
  										document.getElementById("quant5").value = "1";
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1400.00";
  											document.getElementById("totalprice5").value = "1400.00";
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "55.00";
  											document.getElementById("totalprice5").value = "55.00"
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
                        alert('Select a unit');
  										}
  									}
  									else{
  										document.getElementById("desc5").value = "";
  										document.getElementById("quant5").value = "1";
  										document.getElementById("unit5").value = "CH";
  										document.getElementById("unitprice5").value = "";
  										document.getElementById("totalprice5").value = "0";
                      alert('Select a unit');
  									}
  								}

  								function displayPrice5() {
  									var prod5 = document.getElementById("productcode5").value;
  									var u5 = document.getElementById("unit5").value;
  									if (prod5 == "R1"){
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1200.00";
  											document.getElementById("totalprice5").value = "1200.00"
  											document.getElementById("quant5").value = "1";
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "45.00";
  											document.getElementById("totalprice5").value = "45.00";
  											document.getElementById("quant5").value = "1";
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
  											document.getElementById("quant5").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod5 == "R2"){
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1270.00";
  											document.getElementById("totalprice5").value = "1270.00";
  											document.getElementById("quant5").value = "1";
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "50.00";
  											document.getElementById("totalprice5").value = "50.00";
  											document.getElementById("quant5").value = "1";
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
  											document.getElementById("quant5").value = "1";
                        alert('Select a product');
  										}
  									}
  									else if (prod5 == "R3"){
  										if(u5 == "S"){
  											document.getElementById("unitprice5").value = "1400.00";
  											document.getElementById("totalprice5").value = "1400.00";
  											document.getElementById("quant5").value = "1";
  										}
  										else if (u5 == "K"){
  											document.getElementById("unitprice5").value = "55.00";
  											document.getElementById("totalprice5").value = "55.00"
  											document.getElementById("quant5").value = "1";
  										}
  										else{
  											document.getElementById("unitprice5").value = "";
  											document.getElementById("totalprice5").value = "0";
  											document.getElementById("quant5").value = "1";
                        alert('Select a product');
  										}
  									}
  									else {
  										document.getElementById("unitprice5").value = "";
  										document.getElementById("totalprice5").value = "0";
  										document.getElementById("quant5").value = "1";
                      alert('Select a product');
  									}
  								}

  								function totalP5() {
  									var up5 = document.getElementById("unitprice5").value;
  									var quan5 = document.getElementById("quant5").value;
  									var tot5 = parseFloat(up5) * parseFloat(quan5);
  									document.getElementById("totalprice5").value = tot5;

  									var totttt1 = 0;
										totttt1 = document.getElementById("totalprice1").value;
  									var totttt2 = 0;
										totttt2 = document.getElementById("totalprice2").value;
  									var totttt3 = 0;
										totttt3 = document.getElementById("totalprice3").value;
  									var totttt4 = 0;
										totttt4 = document.getElementById("totalprice4").value;
  									var overallTotal5 = parseFloat(totttt1) + parseFloat(totttt2) + parseFloat(totttt3) + parseFloat(totttt4) + tot5;
  									document.getElementById("totalamount").value = overallTotal5;
  								}
  							</script>
  						</td>
  						<td>
  							<input type="text" id="desc5" value="" size="30" maxlength="30" readonly />
  						</td>
  						<td>
  							<input type="text" id="unitprice5" value="" size="8" maxlength="7" readonly />
  						</td>
  						<td>
  							<input type="text" name="ttlprice5" id="totalprice5" value="0" size="12" maxlength="10" readonly />
  						</td>
  					</tr>

  				</tbody>
  			</table>
  			<div class="div3">
  				<label for="Total">Total: </label>
  				<input type="text" name="Total" id="totalamount" value="" size="15" maxlength="10" />

  			</div><br>
  			<input type="submit" name="submit" value="Submit" onclick="submitted()"/>
  			<script>
  				function submitted(){
            var onum = document.getElementById("ordernum").value;
            var order = parseInt(onum);
            order++;
            var orderS = order.toString();
            var i;
            var neworder = orderS;
            if (orderS.length<7)
            {
              var zero =  7 - orderS.length;
              for (i=0; i<zero; i++){
                  neworder = "0" + neworder;
              }
            }
            document.getElementById("ordernum").value = neworder;
  				}
  			</script>
  			<input type="reset" name="reset" value="Reset"/>
  		</div>

    </form>
  </body>
</html>
