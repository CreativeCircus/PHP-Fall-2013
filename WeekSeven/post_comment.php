<?php
include ('session.php');

$comment = $_POST['comment'];
$username = $_SESSION['username'];

$sql = "INSERT INTO posts (username , comment) VALUES ('" .$username . "',  '". $comment ."')";

if (mysql_query($sql, $connection)) {
	//mail('daniel@seripap.com', 'A new comment posted by ' . $username . '!', $comment);
	echo "Success your message was posted and the admin has been notified!! <a href='index.php'>Click here to go back</a>.";
} else {
	echo "There was an error: " . mysql_error();
}
// Close the DB Connection
mysql_close($connection);
?>
