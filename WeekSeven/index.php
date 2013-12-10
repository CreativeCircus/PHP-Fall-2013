<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is just an example</title>
	<style>
	ul li {
		list-style-type: none;
	}
	</style>
</head>
<body>
<nav>
<ul>
	<?php
	if ($_SESSION['isLoggedIn']) {
		echo '<li><a href="index.php?id=comments">Comments</a></li>';
		echo '<li><a href="index.php?id=logout">Logout</a></li>';
	} else {
		echo '<li><a href="index.php?id=login">Login</a></li>';
		echo '<li><a href="index.php?id=register">Register</a></li>';
	}
	?>
</ul>
</nav>
<section>
	<?php

	// $url = (isset($_GET['id'])) ? $_GET['id'] : '';

	if (isset($_GET['id'])) {
		$url = $_GET['id'];
	} else {
		$url = '';
	}

	if ($url === "") {
		if ($_SESSION['isLoggedIn']) {
			include ('comments.php');
		} else {
			include ('login.html');
		}
	} else if ($url === "comments") {
		include ('comments.php');
	} else if ($url === "logout") {
		include ('logout.php');
	} else {
		include ($url.'.html');
	}

	?>
	</section>
</body>
</html>
