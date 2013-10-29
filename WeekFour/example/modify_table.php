<?php
include ('connection.php');

// http://localhost/modify_table.php?id=1&sex=female

$age = "30";
$sex = $_GET['sex'];
$id = $_GET['id'];

if ($sex == "male") {
	$sex = "0";
} else {
	$sex = "1";
}

$sql = "UPDATE users SET age = ". $age .", sex = ". $sex ." WHERE id = " . $id;

if (mysql_query($sql, $connection)) {
	echo "Success!";
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);
?>
