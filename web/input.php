<!DOCTYPE html>
<html>
<head>
	<title>Input a card</title>
</head>
<body>
<h1>Card Input</h1>



<?php
require('dbConnect.php');
$db = get_db();
if (!empty($_POST)){
$name = $_POST['name'];
$num = $_POST['num'];
$collection_id = $_POST['collection_id'];
$value = $_POST['value'];
echo "test";
$statement = $db->prepare("INSERT INTO card (name, num, collection_id, value) VALUES (:name, :num, :collection_id, :value)");
$statement->bindValue(':name', $name);
$statement->bindValue(':num', $num);
$statement->bindValue(':collection_id', $collection_id);
$statement->bindValue(':value', $value);
$statement->execute();
}

?>
<form action="/input.php" method="POST">
  Card Name: <input type="text" name="name"><br>
  Collection Number: <input type="number" name="setnum"><br>
  Set Name: <input type="text" name="collection_id"><br>
  Price of card: <input type="number" name="value"><br>

  <button type="">Submit</button> <br>
</form>
<form action="/project.html" method="GET">

  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</form>


</body>
</html>