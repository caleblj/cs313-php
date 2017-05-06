<<?php 
$name = htmlspecialchars($_POST["name"]);
$foods = $_POST["foods"];
$comments = htmlspecialchars($_POST["comments"]);
$address = htmlspecialchars($_POST["address"]);
$zip = htmlspecialchars($_POST["zip"]);
$apartment = htmlspecialchars($_POST["apt"]);
$state = htmlspecialchars($_POST["state"]);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation page</title>
</head>
<body>
	<p>You have ordered the following food:</p>
	<ul>
<?
foreach ($foods as $food)
{
	$food_clean = htmlspecialchars($food);
	echo "<li><p>$food_clean</p></li>";
}
?>	

	These are being sent to the following address:<br />
		<p><?=$name ?></p>
		<p><?=$address ?> <?=$apt ?></p>
		<p><?=$city ?> <?=$state ?> <?=$zip ?></p>

		<br />
		Thank you for shopping with us!<br/>
</body>
</html>