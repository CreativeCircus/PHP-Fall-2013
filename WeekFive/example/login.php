<?php include('sql.php');
// Check the password with whatever comes back from the DB
$selectSQL = "SELECT * FROM users";
$results = mysql_query($selectSQL, $connection);

while ($row = mysql_fetch_array($results)) {
	if ($row['username'] === $username) {
		if ($row['password'] === $encryptedPass) {
			$loggedIn = true;
			$successUser = $row['username'];
			$successEmail = $row['email'];
			$successFooter = $row['custom_footer'];
		} else {
			$loggedIn = false;
			$successUser = '';
			$successEmail = '';
			$successFooter = '';
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Logged in!</title>
	<style>
		.header {
			width: 100%;
			padding: 5px;
			background-color: black;
		}
		.nav {
			float: left;
			width: 10%;
			padding: 5px;
		}
		.content {
			float: right;
			width: 80%;
			padding: 5px;
		}
		.foot {
			background-color: orange;
			width: 100%;
			padding: 5px;
		}
	</style>
</head>
<body>
	<header class="header">
		<h1> This is my header</h1>
	</header>

	<section class="container">
		<nav class="nav">
		<ul>
		<li>Home</li>
		<li>About me</li>
		<?php
		if ($loggedIn) {
			echo "<li>Your Email: " . $successEmail . "</li>";
			}
		?>
		</ul>
		</nav>
		<article class="content">
<?php
if ($loggedIn) {
	echo "Hello, " . $successUser . " welcome to your page!<br>";
} else {
	echo "You are not logged in.";
}
?>
		</article>
		<div style="clear: both;"></div>
	</section>
	<?php
	if ($loggedIn) {
		echo $successFooter;
	}
?>
	<?php include('footer.php'); ?>
</body>
</html>
