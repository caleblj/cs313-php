<?php
require('dbConnect.php');
$db = get_db();
$statement = $db->prepare('SELECT card.name, card.id AS id, card.value, collection.name AS collectname, card.setnum FROM card INNER JOIN collection ON card.collection_id=collection.id');
$statement->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Card Info</title>
</head>

<body>
<div>

<h1>Card Info</h1>

<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	echo '<p>';
	echo '<strong>' . $row['name'] . ' ' . $row['setnum'] . ': ';
	echo $row['collectname'] . '</strong>' . ' ' . $row['value'];
	echo '</p>';
	echo '<a href = "names.php?id=' .$row['id'] . '">Edit card</a>';
}
?>


<br>
  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</div>

</body>
</html>