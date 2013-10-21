# PHP Loops

+ Homework 2 due
+ Quiz 2
+ Review git, include(), $_GET/$_POST
+ Example of integrating include/$_GET

### While

Simplest type of loop in PHP.

```php
while (expr):
    statement
    ...
endwhile;
```

```php
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
```

### Do-While

do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning. The main difference from regular while loops is that the first iteration of a do-while loop is guaranteed to run (the truth expression is only checked at the end of the iteration), whereas it may not necessarily run with a regular while loop (the truth expression is checked at the beginning of each iteration, if it evaluates to FALSE right from the beginning, the loop execution would end immediately).

```php
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```

The above loop would run one time exactly, since after the first iteration, when truth expression is checked, it evaluates to FALSE ($i is not bigger than 0) and the loop execution ends.

### For

for loops are the most complex loops in PHP. They behave like their C counterparts. The syntax of a for loop is:

for (expr1; expr2; expr3)
    statement
The first expression (expr1) is evaluated (executed) once unconditionally at the beginning of the loop.

In the beginning of each iteration, expr2 is evaluated. If it evaluates to TRUE, the loop continues and the nested statement(s) are executed. If it evaluates to FALSE, the execution of the loop ends.

At the end of each iteration, expr3 is evaluated (executed).

```php
<?php
/* example 1 */
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
?>
```

### For-Each

```php
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value . "\n";
}
?>
```

### Breaking

Break ends execution of the loops

```php
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value . "\n";
    break;
}
?>
```

### continue

continue is used within looping structures to skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration.

```php
<?php
    // Prints 1, skips 2, prints 3
    $arr = array(1, 2, 3);
    foreach($arr as $number) {
      if($number == 2) {
        continue;
      }
      print $number;
    }
?>
```
