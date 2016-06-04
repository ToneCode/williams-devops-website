<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/

// include the appropriate number of dirname() functions
// on line 8 to correctly resolve your directory's path
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $PAGE_TITLE; ?></title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="<?php echo $PREFIX; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
				integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"
				  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="../../javascript/mailer.js"></script>
		<!-- Custom styles for this template -->
		!-- Google reCAPTCHA -->
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<link href="<?php echo $PREFIX; ?>css/style.css" rel="stylesheet">
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!-- NAVBAR -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">>
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo $PREFIX; ?>index.php">WmsDevOps</a>
					</div>
					<div class="navbar-collapse collapse">
						<nav>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo $PREFIX; ?>index.php">Home</a></li>
								<li><a href="<?php echo $PREFIX; ?>about/index.php">About</a></li>
								<li><a href="<?php echo $PREFIX; ?>projects/index.php">Projects</a></li>
								<li><a href="<?php echo $PREFIX; ?>contact/index.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVBAR -->