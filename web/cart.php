<?php
$foods = $_POST["foods"];
$comments = htmlspecialchars($_POST["comments"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<form method="POST" action="checkout.php">
	<h1>viewing cart</h1>
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
		If the above is correct please select "Checkout"<br />
			<input type="submit" value="Checkout"><br />
			If you want to shop more please click "Shop"<br />
			<FORM><INPUT Type="button" VALUE="Shop" onClick="history.go(-1);return true;"></FORM>
	</form>
</body>
</html>