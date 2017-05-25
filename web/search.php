<?php
require('dbConnect.php');
$db = get_db();

if(!empty($_POST))
{
$card = $_POST['name'];
$statement = $db->prepare('SELECT * from card WHERE lower(name) LIKE :card');
$statement->bindValue(':card', strtolower('%'.$card.'%'));
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	echo '<p>';
	echo '<strong>' . $row['name'] . ' ' . $row['setnum'] . ':';
	echo $row['setname'] . '</strong>' . ' - ' . $row['price'];
	echo '</p>';
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Cards</title>
</head>
<body>
<h1>Search</h1>

<form action="/search.php" method="POST">
  Search: <input type="text" name="name"><br>
  <button type="">Submit</button>
</form>

</body>
</html>