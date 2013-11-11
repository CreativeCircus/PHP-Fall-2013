# Sessions

Session stores infroatmion about a user

### Starting a session

```php
<?php session_start(); ?>
```

*Note:* This MUST appear before the <html> tag

### Storing session variables

```php
<?php
session_start();
// store session data
$_SESSION['views']=1;
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

</body>
</html>
```

```php
<?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>
```

### Destryoing sessions

Destroy a specific session

```php
<?php
session_start();
if(isset($_SESSION['views']))
  unset($_SESSION['views']);
?>
```

OR Destroy all

```php
<?php session_destroy(); ?>
```

### Session example with username and password

Authentication

1. Set flags

```php
$_SESSION['authenticated'] = true;
```

2. Set useful info

```php
$_SESSION['username'] = 'blahblah';
$_SESSION['userid'] = 1;
```

Cookie life time?

```
// 24 hrs
session.cookie_lifetime = 86400; // OR absolute expiration time
```
Specifices lifetime of cookie in seconds. Default is 0 which translates to "Until browser is closed"

Max Life Time
```
session.gc_maxlifetime = 86400; // OR Maximum idle time
```
Specifies number of seconds after which date will be seen as garbage. Defaults to 1440 seconds

