<?php
// First connect to the SQL
include('sql.php');

// Check if the username already exists
$selectSQL = "SELECT * FROM users";
$results = mysql_query($selectSQL, $connection);

while ($row = mysql_fetch_array($results)) {
	if ($row['username'] === $username) {
		echo ('Sorry! The username, <b>"'.$username.'"</b> is already registered');
		die();
	}
}

// Insert user into database

$sql = "INSERT INTO users (username, password, email, custom_footer) VALUES ('".$username."', '".$encryptedPass."', '".$email."', '".$footer."')";

if (mysql_query($sql, $connection)) {
	echo "Success! You have been registered with the username: ". $username;
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);


?>
