<?php
include ('connection.php');

$sql = "INSERT INTO users (name, age, sex) VALUES ('Sally', '21', '1')";

if (mysql_query($sql, $connection)) {
	echo "Success!";
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);
?>
