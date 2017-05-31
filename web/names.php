<!DOCTYPE html>
<html>
<head>
	<title>List of Pokemon Names</title>
</head>
<body>

<?php
require('dbConnect.php');
$db = get_db();
if (!empty($_POST)){
$name = $_POST['name'];
$num = $_POST['num'];
$collection_id = $_POST['collection_id'];
$value = $_POST['value'];
$value = $_POST['id'];



$statement = $db->prepare("UPDATE card SET name = :name, num = :num, collection_id = :collection_id, value = :value WHERE id = :id ");
$statement->bindValue(':name', $name);
$statement->bindValue(':num', $num);
$statement->bindValue(':collection_id', $collection_id);
$statement->bindValue(':value', $value);
$statement->bindValue(':id', $id);

$statement->execute();
}
  if (!isset($_GET['id'])){
  	echo "no ID";
  }
  	else
{
?>
<form action="/names.php" method="POST">
  Card Name: <input type="text" name="name"><br>
  Collection Number: <input type="number" name="setnum"><br>
  Set Name: <input type="text" name="collection_id"><br>
  Price of card: <input type="number" name="value"><br>
  <input type="hidden" name = "id" value="<?php echo $_GET['id']; ?>">

  <button type="">Submit</button>
</form>

<?php 
};
?>
<form action="/project.html" method="GET">

  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</form>




</body>
</html>