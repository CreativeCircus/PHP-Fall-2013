<?php

include('session.php');

 	$sql = "SELECT * FROM posts";
	$results = mysql_query($sql, $connection);
	while ($row = mysql_fetch_array($results)) {
		if (isset($row['id'])) {
			if ($row['id'] % 2 === 0) {
				echo '<div class="even"><strong>' . $row['username'] . "</strong>: ". $row['comment'] .  " </div>";
			} else {
				echo '<div><strong>' . $row['username'] . "</strong>: ". $row['comment'] .  " </div>";
			}
			echo "<hr>";
		} else {
			echo 'No comments';
		}
	}

?>
