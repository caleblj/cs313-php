<?php
// First let's process all the input
// using constants for the names of the elements in the form would be better...
// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.
$name = htmlspecialchars($_POST["name"]);
$foods = $_POST["foods"];
$comments = htmlspecialchars($_POST["comments"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<form method="POST" action="Checkout.php">
	<h1>viewing cart</h1>

	<p>Your name is: <?=$name ?></p>
	<p>You have ordered the following food:</p>
	<ul>
<?
foreach ($foods as $food)
{
	$food_clean = htmlspecialchars($food);
	echo "<li><p>$food_clean</p></li>";
}
?>		

	</ul>

	<p>Comments: <?=$comments?></p>
</form>
		If the above is correct please select "Checkout"<br />
			<input type="submit" value="Checkout"><br />
			If you want to shop more please click "Shop"<br />
			<button onclick="goBack()">Shop</button>

</body>
</html>