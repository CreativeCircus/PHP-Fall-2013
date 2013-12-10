<?php include('session.php');

/* Check if $_SESSION is even set */
if (isset($_SESSION['isLoggedIn'])) {
	// The user session isLoggedIn is set
} else {
	// The user session isLoggedIn is NOT SET
	$_SESSION['isLoggedIn'] = FALSE;
	$_SESSION['msg'] = '';
}


if ($_SESSION['isLoggedIn'] === FALSE) {
	// The user session isLoggedIn is not set

	// Set variables from the register.html page
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		// $email = $_POST['email'];
		// $footer = $_POST['footer'];

	// Encrypt password recieved from form
		$encryptedPass = md5($salt . $password);

// Check the password with whatever comes back from the DB
		$selectSQL = "SELECT * FROM users";
		$results = mysql_query($selectSQL, $connection);

		while ($row = mysql_fetch_array($results)) {

			if ($row['username'] === $username) {
				if ($row['password'] === $encryptedPass) {
					$_SESSION['isLoggedIn'] = TRUE;

					$_SESSION['user_id'] = $row['id'];

					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					// $_SESSION['footer'] = $row['custom_footer'];
				} else {
					$_SESSION['isLoggedIn'] = FALSE;
					$_SESSION['msg'] = "Your password is incorrect.";
				}

			} else {
				$_SESSION['msg'] = "Username does not exist in database.";
			}
		}
	} else {
		$_SESSION['msg'] = "You are not coming from the login form";
	}
} else {
	$_SESSION['msg'] = "You are authenticated";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>This is my login page</title>
</head>
<body>

<style>
.messages {
	background-color: #CCC;
}
</style>

<div class="messages">
<?php echo $_SESSION['msg']; ?>
</div>

<div class="content">
<?php

if ($_SESSION['isLoggedIn'] === TRUE) {

header ('Location: index.php?id=comments');

} else {
	echo "You are not logged in.";
}

?>
</div>

</body>
</html>

