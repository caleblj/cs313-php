<?php

require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Card Names</title>
</head>

<body>
<div>

<h1>Name of Cards</h1>

<?php
$statement = $db->prepare("SELECT name, setnum, setname, price FROM card");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	echo '<p>';
	echo '<strong>' . $row['name'] . ' ' . $row['setnum'] . ':';
	echo $row['setname'] . '</strong>' . ' - ' . $row['price'];
	echo '</p>';
}
?>


</div>

</body>
</html>