<?php

session_start();

// echo $_SESSION['username'];

?>


<script>

var username = "<?php echo $_SESSION['username']; ?>";
var loggedin;

<?php if ($_SESSION['isLoggedIn']) {
	echo ('loggedin = true;');
} else {
	echo ('loggedin = false;');
}
 ?>
alert('hello, ' + username);

</script>
