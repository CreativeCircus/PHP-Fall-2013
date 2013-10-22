<div style="color: red;">
<?php

// check for submission
if (isset($_POST['formSubmitted'])) {
	echo '<span style="color: blue;">';
	echo "Hello, " . $_POST['fName'] . " " . $_POST['lName'];
	echo '</span>';
} else {
	echo "You did not submit anything!";
}
?>
</div>
