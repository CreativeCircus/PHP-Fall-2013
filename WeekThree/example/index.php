<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TEST Page</title>
	<style>
		body {
			font-size: 12px;
			font-family: Arial;
		}
		.content {
			clear: both;
			padding-top: 30px;
		}
		h1 {
			margin: 20px;
		}
	</style>
</head>
<body>
	<header>
		<?php include('header.html'); ?>
	</header>

	<section class="content">
		<?php

		$url = (isset($_GET['id'])) ? $_GET['id'] : '';

		if ($url === "") {
			echo "This is the default page with no query, click to navigate to new page, using this template";
		} else {
			include ($url.'.html');
		}

		?>
	</section>
</body>
</html>
