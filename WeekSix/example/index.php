<?php
session_start();
// Just display a "1" as pageview
// $_SESSION['views'] = 1;

// Lets actually increase the count.

if (isset($_SESSION['views'])) {
	$_SESSION['views'] = $_SESSION['views'] + 1;
} else {
	$_SESSION['views'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sessions example</title>
</head>
<body>
<?php

echo "Pageviews=" . $_SESSION['views'];

?>
</body>
</html>
