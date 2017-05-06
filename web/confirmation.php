<?php 
$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);
$zip = htmlspecialchars($_POST["zip"]);
$apartment = htmlspecialchars($_POST["apt"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation page</title>
</head>
<body>


Your order is being sent to the following address:<br />
		<p><?=$name ?></p>
		<p><?=$address ?> <?=$apt ?></p>
		<p><?=$city ?>, <?=$state ?>, <?=$zip ?></p>

		<br />
Thank you for shopping with us!<br/>
</body>
</html>