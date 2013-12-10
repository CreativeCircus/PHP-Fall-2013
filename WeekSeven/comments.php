<?php include('header.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<style>

.even {
	background-color: #CCC;
}

</style>
<?php
if ($_SESSION['isLoggedIn']) {

	echo('Hi, ' . $_SESSION['username']);

 echo('<h1>Comments</h1>');
 	$sql = "SELECT * FROM posts";
	$results = mysql_query($sql, $connection);
	echo "<br />";
	echo '<section class="namesContainer">';
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
echo "</section>";
 echo('<h1>Post a comment</h1>');
 echo('<form>');
 echo('<input type="text" id="comment" name="comment" placeholder="comment">');
 echo('<input id="button" type="submit" value="Post">');
 echo('<div id="msg"></div>');
 echo('</form>');

} else {
	echo ('not logged in');
}

?>

<script>
// on submit of form
$('#button').click(function(event) {
	event.preventDefault();
	$('#msg').html('sending...');

	$.ajax({
		url: 'post_comment.php',
		type: 'POST',
		data: {
			comment: $('#comment').val()
		},
		dataType: 'html'
	}).done(function(data) {
		$('#msg').html('comment posted!');
		$('.namesContainer').load('comments_from_db.php');
	}).fail(function(msg) {
		$('#msg').html('there was an error');
	})

});


</script>
