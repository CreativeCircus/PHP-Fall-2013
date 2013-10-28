<?php
$link = mysql_connect('127.0.0.1', 'root', 'dseripap');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'UPDATE users SET age = 36 WHERE id = 1';

 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error";
 }

mysql_close($link);

?>
