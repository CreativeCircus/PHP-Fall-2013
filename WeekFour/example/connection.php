<?php
$connection = mysql_connect('127.0.0.1', 'root', 'dseripap');
if (!$connection) {
	die('Could not connect: ' . mysql_error());
}
echo "Connection to server success.\n";

// Select database
mysql_select_db("test") or die(mysql_error());
?>
