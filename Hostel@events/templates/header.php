<?php

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/events/';

$user_logged = false;

?>
<!DOCTYPE html>
<html>

<head>
	<title>Event Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $server; ?>css/style.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 350px;
			padding: 20px;
		}
	</style>
</head>

<body>
	<header class="d-flex w-100">
		<nav class="navbar navbar-expand-lg w-100 bg-light">
			<div class="navbar-collapse collapse justify-content-between">
				<ul class="navbar-nav" id="navbar">
					<li class="nav-item active">
						<a class="nav-link text-dark" href="<?php echo $server; ?>index.php"><i class="fa fa-calendar-o text-dark"></i> Event Management</a>
					</li>

					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$user_logged = true;
						if ($_SESSION['role'] == 'admin') { ?>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/event/view.php">Events</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/category/view.php">Categories</a>
							</li>
					<?php }
					} ?>

				</ul>
				<ul class="navbar-nav">
						<form class="d-flex my-2 my-lg-0" action="<?php echo $server; ?>templates/searchForm.php" method="post">
							<input class="form-control mr-sm-2" type="text" name="term" aria-label="Search" required>
							<button type="submit" class="btn btn-primary m-2 my-sm-0" value="Submit" >Search</button>
						</form>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item save mr-4">
						<a class="nav-link btn bg-warning" href="<?php echo $server; ?>templates/save.php">
							<span class="text-white">0 </span>
							<i class="fa fa-heart text-white" style="font-size: 18px;"></i>
						</a>
					</li>

					<?php
					if ($user_logged) { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/user/logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Sign Out</a>
						</li>
					<?php } else { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-primary text-white" href="<?php echo $server; ?>components/user/login.php"><span><i class="fa fa-sign-in text-white"></i></span> Sign In</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container-fluid page-container">