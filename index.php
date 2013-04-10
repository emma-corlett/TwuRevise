<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include 'includes/header.php'; 
	include 'includes/settings.php';
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $myURL; ?>/assets/css/styles-index.css">
	<title>TwuRevise | Home</title>
</head>
<body>
	<div class="container"> <!-- Central block of stuff -->
		<div class="navbar">
			<div class="navbar-inner">
				<img src="<?php echo $myURL; ?>/assets/images/temp-logo.png" height="28" width="28" alt="Templogo" class="nav" id="navlogo"/> 
				<a class="brand" href="#"> TwuRevise </a> 
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>

		<div id="filterbar">
			<ul>
			<li><span class="header1">Filters:</span></li>
			<li>Ipsum</li>|
			<li>Dolor</li>|
			<li>Sit</li>|
			</ul>
		</div>

		<div id="dash"> <!-- Dashboardy type thing (where the 'tiles' are displayed) -->

			<div class="resource" id="post">
				Resource
			</div>

			<div class="task" id="post">
				Task
			</div>

			<div class="question" id="post">
				Question
			</div>

			<div class="generalPost" id="post">
				General Post
			</div>

			<div class="resource" id="post">
				Resource
			</div>

			<div class="task" id="post">
				Task
			</div>

			<div class="question" id="post">
				Question
			</div>

			<div class="generalPost" id="post">
				General Post
			</div>

			<div class="resource" id="post">
				Resource
			</div>

			<div class="task" id="post">
				Task
			</div>

			<div class="question" id="post">
				Question
			</div>

			<div class="generalPost" id="post">
				General Post
			</div>

			<div style="clear:both;"></div>
		</div>

	</div>
</body>
</html>