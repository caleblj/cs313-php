<!DOCTYPE html>
<html>
<head>
	<title>Input a card</title>
</head>
<body>
<h1>Card Input</h1>



<?php
$statement = $db->prepare("INSERT INTO card (name, num, setname, value) VALUES (:name, :num, :setname, :value)");
$statement->bindValue(':name', $name);
$statement->bindValue(':num', $num);
$statement->bindValue(':setname', $setname);
$statement->bindValue(':value', $value);
$statement->execute();
?>
<form action="/input.php" method="POST">
  Card Name: <input type="text" name="name"><br>
  Collection Number: <input type="number" name="setnum"><br>
  Set Name: <input type="text" name="setname"><br>
  Price of card: <input type="number" name="value"><br>

  <button type="">Submit</button>
</form>
<form action="/project.html" method="GET">

  <button type="">Home</button>
</form>


</body>
</html>