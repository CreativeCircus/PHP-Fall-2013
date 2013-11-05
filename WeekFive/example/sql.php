<?php
$connection = mysql_connect('127.0.0.1', 'root', 'dseripap');
if (!$connection) {
	die('Could not connect: ' . mysql_error());
}
//echo "Connection to server success.\n";

// Select database
mysql_select_db("example") or die(mysql_error());

// Set variables from the register.html page
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$footer = $_POST['footer'];

// Set my salt
$salt = "JBIa8s7dy@3290IAKSDnj129312eASDOJa";

// Encrypt password recieved from form
$encryptedPass = md5($salt . $password);

?>
