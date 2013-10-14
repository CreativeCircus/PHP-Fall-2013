# Agenda - October 14, 2013

+ Homework 1 DUE in the repository
+ (Quiz 1)[http://bit.ly/1fwcV5Y]
+ Review git/creating functions/variables

Integrating HTML and PHP, how to load pages dynamically, GET/POST data from a form to another page, validating POST data and sending emails using mail().

## Integrating HTML and PHP

PHP can be used alongside HTML

```html
index.php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My first HTML page with PHP</title>
</head>
<body>
<?php echo('Hello world!'); ?>
</body>
</html>
```

## Including other pages dynamically

PHP can make your website dynamic. Without server side proccessing, to load a page template multiple times you would have to asynchronously load the file or put the content in the iFrame. Now, you can load a file dynamically.

```html
hello.html

Hello world!
```

```php
index.php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My first HTML page with PHP</title>
</head>
<body>
<?php include 'hello.html'; ?>
</body>
</html>
```

You can also load other PHP files and reuse the variables

```php
variables.php
<?php
$hello = "Hello";
$world = "world!"
?>
```

```php
index.php


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My first HTML page with PHP</title>
</head>
<body>
<?php include 'variables.php';

	echo $hello . " " . $world;
 ?>
</body>
</html>

```

## $_GET[]

With PHP, you can GET data or POST data to a specified file.

```php
get.php
<?php

// in URL browser, ?x=y;
print_r($_GET);

?>
```

Getting a specific URL query

```php

<?php

echo $_GET['key'];

?>

```

Error handling: Determine if a variable is set and not NULL.

isset();
```php

<?php

if (isset($_GET['key'])) {
	echo $_GET['key'];
} else {
	echo "nothing was defined";
}

?>

```

## $_POST[]

You may send data from an HTML page to a PHP script.

```html
post.html
<form action="post.php" method="POST">
<input type="text" name="fName"><br />
<input type="text" name="lName">
<input type="submit" value="submit">
</form>
```

```php
post.php
<?php
	echo "Hello, " . $_POST['fName'] . " " . $_POST['lName'];
?>
```

## GET VS POST

BOTH: Creates a key => value array. Both are superglobal variables and can be accessed outside of any scope.

```

$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.

```

GET is traditionally used for sending non-sensitive information and usually have 2000 character limit.

POST - No one can see what is submitted besides the user
