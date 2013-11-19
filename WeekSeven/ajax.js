<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
// on submit of form
$('#button').click(function(event) {
	// prevent the button from doing anything besides functions below
	event.preventDefault();
	// Just tell the user the form is sending
	$('#msg').html('sending...');

	// start ajax request
	$.ajax({
		// url to post to
		url: 'post_comment.php',
		type: 'POST',
		data: {
			// comment data
			comment: $('#comment').val()
		},
		dataType: 'html'
	}).done(function(data) {
		// change the message on success
		$('#msg').html('comment posted!');
		// refresh the names container div with the new data posted to the DB
		$('.namesContainer').load('comments_from_db.php');
	}).fail(function(msg) {
		$('#msg').html('there was an error');
	})

});


</script>
