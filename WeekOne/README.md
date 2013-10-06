# Agenda - October 7, 2013

### Introduction

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
+ Variables `$var``$x = 1`
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

+ Built in functions

**strlen();**
```php
strlen($var);
```

**explode();**
```php
$nfl_teams = "panthers,falcons,giants,patriots";
$team = explode(",",$nfl_teams);
echo $team[0];
```
