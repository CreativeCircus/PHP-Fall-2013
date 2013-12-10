<?php
// First connect to the SQL
include('session.php');

// Check if the username already exists
$selectSQL = "SELECT * FROM users";
$results = mysql_query($selectSQL, $connection);

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];


while ($row = mysql_fetch_array($results)) {
	if ($row['username'] === $username) {
		echo ('Sorry! The username, <b>"'.$username.'"</b> is already registered');
		die();
	}
}

// Insert user into database

$sql = "INSERT INTO users (username, password, email) VALUES ('".$username."', '".$password."', '".$email."')";

if (mysql_query($sql, $connection)) {
	echo "Success! You have been registered with the username: ". $username . " <a href='index.php'>Click here to login</a>.";
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);


?>
