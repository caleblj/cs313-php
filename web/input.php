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
$statement = $db->prepare("SELECT * from collection");
$statement->execute();
$collections = $statement->fetchAll(PDO::FETCH_ASSOC);
if (!empty($_POST)){
$name = $_POST['name'];
$setnum = $_POST['setnum'];
$collection_id = $_POST['collection_id'];
$value = $_POST['value'];

$statement = $db->prepare("INSERT INTO card (name, setnum, collection_id, value) VALUES (:name, :setnum, :collection_id, :value)");
$statement->bindValue(':name', $name);
$statement->bindValue(':setnum', $setnum);
$statement->bindValue(':collection_id', $collection_id);
$statement->bindValue(':value', $value);
$statement->execute();
header('location:project.html');
exit();
}

?>
<form action="/input.php" method="POST">
  Card Name: <input type="text" name="name"><br>
  Collection Number: <input type="number" name="setnum"><br>
  Set Name: <SELECT name="collection_id">
  <?php
foreach($collections AS $collection){
	echo '<option value="'.$collection['id'].
	'">'.$collection['name']. '</option>';
}

  ?></SELECT><br>
  Price of card: <input type="number" name="value"><br>

  <button type="">Submit</button> <br>
</form>



<form action="/project.html" method="GET">

  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</form>


</body>
</html>