<?php

//$connection = mysql_connect('127.0.0.1', 'root', 'dseripap');
$connection = mysql_connect('external-db.s167143.gridserver.com', 'db167143_class','abc123456');

if (!$connection) {
	die('Could not connect: ' . mysql_error());
}
echo "Connection to server success.\n";

// Select database
mysql_select_db("db167143_class") or die(mysql_error());

$sql = "CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50), age INT, sex INT, PRIMARY KEY (id))";

if (mysql_query($sql, $connection)) {
	echo "Created table users successfully";
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);
?>
