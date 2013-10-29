<?php

$connection = mysql_connect('127.0.0.1', 'root', 'dseripap');
//$connection = mysql_connect('external-db.s167143.gridserver.com', 'db167143_class','abc123456');

if (!$connection) {
	die('Could not connect: ' . mysql_error());
}

echo "Connection to server success.\n";

// Creates a new databse
$sql = "CREATE DATABASE test";

if(mysql_query($sql, $connection)) {
	echo "Database test created successfully\n";
} else {
	echo "There was an error creating your database: " . mysql_error();
}


mysql_close($connection);
?>
