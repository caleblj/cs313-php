<!DOCTYPE html>
<html>
<head>
  <title>Input a card</title>
</head>
<body>
<h1>Registration</h1>
<?php

require('dbConnect.php');
$db = get_db();
if (!empty($_POST)){
$username = $_POST['username'];
$password = $_POST['password'];
$display = $_POST['display'];

$statement = $db->prepare("INSERT INTO account (username, password, display) VALUES (:username, :password, :display)");
$statement->bindValue(':name', $name);
$statement->bindValue(':password', $password);
$statement->bindValue(':display', $display);
$statement->execute();
header('location:login.php');
exit();
}

?>
<form action="/register.php" method="POST">
  UserName: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  Display Name: <input type="text" name="display"><br>

  <button type="">Submit</button> <br>
</form>



<form action="/project.html" method="GET">

  <a href="https://ancient-dusk-38108.herokuapp.com/project.html">Menue</a>

</form>


</body>
</html>