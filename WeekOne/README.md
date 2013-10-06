# Agenda - October 7, 2013

### Introduction

+ Instructor introduction
+ Classmates introduction
+ Go over syllabus, points, attendance, quizzes, tests, contact hours, email, phone

## Starting out

+ Register on github.com
+ Register for domain name
+ Register for hosting
+ Set up local environment
		Install GIT
		Install Apache
		Install PHP
		Install MySQL

### Overview on GIT

+ Initalizing a repository `git init`
+ Staging files `git add .`
+ Remove from staging `git reset`
+ Comitting `git commit -m "Message"`
+ Branching off `git checkout -b "Branch-Name"`
+ Merging `git merge branch to branch`
+ Pushing `git fetch` `git push`
+ Pulling `git pull`

### Intro to PHP

+ Instantiating PHP `<?php ?>`
+ End each line of code with semicolon ';'
+ "Hello World!" `<?php echo('hello world!'); ?>`
+ System Info `<?php phpinfo(); ?>`
+ Commenting

```php
// Single line comment

# Single line comment

/* Multiple line comment
Usually used for explaining
a big chunk of code
or authoring files
*/
```

+ Variables/Booleans

```php
$variable = 'value';
$true_variable = TRUE;
$false_variable = FALSE;

echo ($variable);
echo ($true_variable);
echo ($false_variable);
```
+ Arrays

```php
$my_array_variable = array(
	"key"				=>		"value",
	"dan"				=>		"theman",
	"falcons"		=>	"terrible"
);

var_dump($my_array_variable);

echo ($my_array_variable["key"]);
```

+ Creating Function

```php
function add(x, y) {
	echo (x + y);
	}
```

+ Conditions

```php

$true_condition = TRUE;

if ($true_condition) {
	echo ("This is a true condition, it passed so this will be echoed");
}

if (!$true_condition) {
	echo ("You should not see this be echoed");
}

```

```php

$i = 0;

if ($i === 0) {
    echo "i equals 0";
} elseif ($i === 1) {
    echo "i equals 1";
} elseif ($i === 2) {
    echo "i equals 2";
}

```

+ Switching

```php

$i = 0;

switch ($i) {
	case 0:
		echo ("i equals 0");
		break;
	case 1:
		echo ("i equals 1");
		break;
	case 2:
		echo ("i equals 2");
		break;
	default:
		echo ("i is not set");
}

```

+ Constants
Identifiers for simple value.

```php
define("APPNAME", "My Application");

echo APPNAME;
```

+ Built in functions

**strlen();**
```php
$var = "howmanycharactersinthisvariable?";
echo(strlen($var));
```

**explode();**
```php
$nfl_teams = "panthers,falcons,giants,patriots";
$team = explode(",",$nfl_teams);
echo $team[0];
```
