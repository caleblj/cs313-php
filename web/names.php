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
	if(is_numeric($_GET['id']))
	{
  		$statement = $db->prepare("SELECT * FROM card WHERE id = :id");
  		$statement->bindValue(':id', $_GET['id']);
	$statement->execute();
	$card = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<form action="/names.php" method="POST">
  Card Name: <input type="text" name="name" value = "<?php echo $card[0]['name']; ?>"><br>
  Collection Number: <input type="number" name="setnum" value = "<?php echo $card[0]['num']; ?>"><br>
  Set Name: <input type="text" name="collection_id" value = "<?php echo $card[0]['collection_id']; ?>"><br>
  Price of card: <input type="number" name="value" value = "<?php echo $card[0]['value']; ?>"><br>
  <input type="hidden" name = "id" value="<?php echo $_GET['id']; ?>">

  <button type="">Submit</button>
</form>

<?php 

	}
	else
	{
		echo "ID must be number";
	}


};
?>
<form action="/project.html" method="GET">

  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</form>




</body>
</html>