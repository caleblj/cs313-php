<<?php 
$name = htmlspecialchars($_POST["name"]);
$foods = $_POST["foods"];
$comments = htmlspecialchars($_POST["comments"]);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Check out</title>
 </head>
 <body>
 	<form method="POST" action="confirmation.php">
 	Please enter the following:<br/>
		<label for ="address">Address:</label>
		<input type="text" placeholder="Address" id="address" name="address"><br />

		<label for ="apt">Apartment number:</label>
		<input type="text" placeholder="apt" id="apt" name="apt"><br />

		<label for ="city">City:</label>
		<input type="city" placeholder="City" id="city" name="city"><br />

		<label for ="zip">Zip Code:</label>
		<input type="text" placeholder="Zip" id="zip" name="zip"><br />

		<label for ="state">State:</label>
		<input type="text" placeholder="State" id="state" name="state"><br />


		Please verify the information above the click purchase or return to cart when done<br />
			<input type="submit" value="Purchase">
			<FORM><INPUT Type="button" VALUE="View Cart" onClick="history.go(-1);return true;"></FORM>
			<form/>
 </body>
 </html>