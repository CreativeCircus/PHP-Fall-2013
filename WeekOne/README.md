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
+ End each line of code with semicolon `;`
+ "Hello World!" `<?php echo('hello world!'); ?>`
+ System Info `<?php phpinfo(); ?>`
+ Commenting

```php
// Single line comment

# Single line comment

/* Multiple line comment
Usually used for explaining
a big chunk of code
or authoring files (double astriks are IDE standards, usually **)
*/
```

+ Variables/Booleans
Variables ARE case-sensitive.

```php
$variable = 'value';
$variable2 = "value2";
$true_variable = TRUE;
$false_variable = FALSE;
$VaRiABLeZaRECaSeSeNSEtIVE = "never write a variable like this";

echo ($variable);
echo ($true_variable);
echo ($false_variable);
echo ($VaRiABLeZaRECaSeSeNSEtIVE);

// Concatinating
// You can echo two variables with a period (.)
echo ($variable . " " . $variable2);

// Variables inside a variable?!
$foo = "Foo";
$bar = "Hello, $foo!";

echo ($bar);
```

What about the scope of variables?

```php
$global_variable = "this is a global variable";

function boom()
{
	$global_variable; // Local variable
	echo $global_variable; // breaks

	global $global_variable; // global keyword to reference global variable
	echo $global_variable; // echos
}

boom();

```

+ Arrays

```php
$my_array_variable = array(
	"key"				=>		"value",
	"dan"				=>		"theman",
	"falcons"		=>	"terrible", // You can end arrays with a leading comma (PHP5)
);

// Dumps the array with the type
var_dump($my_array_variable);

// Echos the "key" from the variable
echo ($my_array_variable["key"]);
```

+ Creating Function

```php
// Simple addition function, pass paramaters as variables
function add($x, $y) {
	echo ($x + $y);
	}

// Call the function wherever needed
add(1, 2); // returns 3
```

+ Conditions

```php
// Setting a variable as a boolean
$true_condition = TRUE; // True is 1
$false_condition = FALSE; // False is empty

// Test the expression against the boolean with an IF condition
if ($true_condition) {
	echo ("This is a true condition, it passed so this will be echoed");
}

// The ! means NOT, so if $true_condition was FALSE, this would pass
if (!$true_condition) {
	echo ("You should not see this be echoed");
}

// Ternary
// PHP Also accepts ternary condition
$var = 10;
$var_is_greater_than_two = ($var > 2 ? TRUE : FALSE); // returns true

echo ($var_is_greater_than_two);

/*

	Not in this example, but you can use the following tests:
	(http://php.net/manual/en/language.operators.comparison.php)

	Equal
	$a == $b

	Identical
	$a === $b

	Not Equal
	$a != $b

	Not Identical
	$a !== $b

	Greater Than
	$a > $b

	Less Than
	$a < $b

	Less than or equal to
	$a <= $b

	Greater than or equal to
	$a >= $b

*/

```

```php

// set a variable to a number
$i = 0;

// Test the variable as an elseif condition
if ($i === 0) {
    echo "i equals 0";
} elseif ($i === 1) {
    echo "i equals 1";
} elseif ($i === 2) {
    echo "i equals 2";
}

```

+ Switching
Less redudant way of testing conditions. Easier to read and follow versus elseif conditions.

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
Get length of a string.

```php
$var = "howmanycharactersinthisvariable?";
echo(strlen($var));
```

**explode();**
Seperate a list of items into an array.

```php
$nfl_teams = "panthers,falcons,giants,patriots";
$team = explode(",",$nfl_teams);
echo $team[0];
```

**strip_tags();**
Strips HTML/Non-safe characters

```php
$var = "<body><p>HELLO</p> <p>WORLD</p></body>";
// Strips all HTML
$var = strip_tags($var);
$var2 = "<body><p>HELLO</p> <p>WORLD</p></body>";
// Strips all EXCEPT <p>
$var2 = strip_tags($var2, "<p>");

echo ($var);
```

**substr**
```php
// Start from which character?
$var = substr("daniel", 3);

// Start from which and end at which?
$var2 = substr("daniel", "2", "3");

// Remember that 0 is the first character
echo $var;
```

**strtolower(), strtoupper()**
```php
$lowercase_variable = strtolower("LOWERCASE");
$uppercase_variable = strtoupper("uppercase");

echo ($lowercase_variable);
echo ($uppercase_variable);
```

### Shorthand
In PHP, you can use shorthand to streamline your coding

```php
<?php echo("hello world!"); ?>

<? echo "hello world!"; ?>
```

### Objects
We will go over objects in Week 9. For an example, here is an object written in PHP:

```php
// Create a new class
class My_Class {

	private function inaccessable() {
		echo "you will never access this outside the class";
	}

	// Create a function
	public function world() {
		// Return a value
		return 'hello world';
	}

	public function accessible() {
		$this->inaccessable();
	}
}

// Instantiate the class
$hello = new My_Class;

// Set a variable to the function in the class
$hello_world = $hello->world();

// You cannot access private functions in a class
//$test = $hello->inaccessable();

// But you can add the function inside a public function
// $test = $hello->accessible();

// Let's see whats in $hello_world, should have been the returned value in the function inside the class.
echo ($hello_world);
```

### Standards/Style Guide
There is no *Standard* way to write PHP- HOWEVER, All code should like like one person wrote it. It is imperative your code is concise and to the point. Someone other than you should be able to look at it, understand it, and debug it at will.

For this class, I will focus on using [Code Igniter Standards](http://ellislab.com/codeigniter/user-guide/general/styleguide.html), *to an extent*.
