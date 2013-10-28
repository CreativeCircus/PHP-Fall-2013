# Databases

+ Homework 3 due
+ Test 1 Review
+ Test 1
+ Databases (Connecting to MySql, Create DB, Create Table, Insert Data, Modify Data, Drop Table, Drop DB)

# Review

## Git

```
git add .
git commit -m "Message"
git push
```

## Variables

PHP vs Javascript variables

```
$variable; // PHP
var variable; // Javascript
```

## Arrays

```php
$myArray = array (
  'key'   =>    'value',
  'key2'  =>    'value2'
);
```

## include()

Include includes an external file to a page, allowing you to modularize your page.

## $_GET/$_POST

These two are superglobal variables that are accessible inside and outside the scope of functions.

$_GET[] pulls URL querys
$_POST[] pulls data submitted through forms


## Loops

```php
$array = ('a','b','c','d');

foreach ($array as $key => $value) {
  echo $key . ' ' . $value;
}
```


## Database

Read all about [Relational Databases](http://en.wikipedia.org/wiki/Relational_database). Tuple is a data structure consisting of multiple parts

## MySql

Database viewer:

- SequlPro
- PhpMyAdmin

## Instantiating a connection

First we have to create a connection to the database

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

mysql_close($link); // Close links programatically.
?>
```

## CREATE a database

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

// SQL Query
$sql = 'CREATE DATABASE test';
if (mysql_query($sql, $link)) {
    echo "Database test created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
?>
```

## CREATE Table

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

 // Select the database we want to use
 mysql_select_db("test") or die(mysql_error());

 // SQL Query
 $sql = "CREATE TABLE users ( id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50), age INT, sex INT, PRIMARY KEY (id))";
 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error". mysql_error();
 }
 mysql_close($link);

?>
```

## INSERT Data into table

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'INSERT INTO users '.
       '(name, age, sex) '.
       'VALUES ( "bill", "21", "0" )';

 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error".mysql_error();
 }

mysql_close($link);
?>
```

## Display a Row

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'SELECT * FROM users';
// OR SELECT * FROM users WHERE id = 1

$result = mysql_query($sql, $link);

while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['name'] . " " . $row['age'];
  echo "<br>";
  }

mysql_close($link);
?>
```

## Modifying Data into table (UPDATE)

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'UPDATE users SET age = 36 WHERE id = 1'; // AND commands also work

 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error";
 }

mysql_close($link);
?>
```

## Deleting a table (DROP)

**DANGEROUS** use with caution!

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'DROP TABLE users';

 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error";
 }

mysql_close($link);
?>
```


## Deleting a database (DROP)

**DANGEROUS** use with caution!

```php
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// Select our database
 mysql_select_db("test") or die(mysql_error());

$sql = 'DROP DATABASE test';

 if (mysql_query($sql, $link)) {
  echo "Success.";
 } else {
  echo "Error";
 }

mysql_close($link);
?>
```
