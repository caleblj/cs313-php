<?php 
if(!empty($_POST))
{
	require('dbConnect.php');
	$db = get_db();

$username = $_POST['username'];
$password = $_POST['password'];
$stmt = $db->prepare('SELECT * FROM account WHERE username = :username;');
$stmt->bindValue(':username', $username);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($result) == 0) {
    // user don't exist
    echo "User does not exist!";
} else {
    if ($password != $result[0]['password']) {
        // password mismatch
        echo "Wrong Password!";
    } else {
        // authorize
        $_SESSION['userId'] = $result[0]['id'];
        header('Location: /project.php');
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
 <p>Please enter your login information:</p> <br />


<form action="/login.php" method="POST">
  Username: <input type="text" name="username"><br>
  Password: <input type="text" name="password"><br>
  <button type="">Submit</button>
</form>



</body>
</html>