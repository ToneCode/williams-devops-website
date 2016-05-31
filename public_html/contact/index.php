<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Williams DevOps</title>
		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"
				  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- Custom styles for this template -->
		<link href="../css/style.css" rel="stylesheet">
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
						<a class="navbar-brand" href="#">WmsDevOps</a>
					</div>
					<div class="navbar-collapse collapse">
						<nav>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="../index.php">Home</a></li>
								<li><a href="../about/index.php">About</a></li>
								<li><a href="../projects/index.php">Projects</a></li>
								<li><a href="index.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVBAR -->
		<div class="col-12">
			<img src="../img/devops-contact.jpg" alt="DevOps Contact" style="width:100%;" height="450px">
		</div>
		<div class="col-lg-12">
			<h2>Contact</h2>
			<p>Please email support@WilliamsDevOps.com</p>
			<form class="form-horizontal" role="form" method="post" action="../index.php">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"
								 value="">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email"
								 placeholder="example@domain.com" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" name="message"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<!-- Will be used to alert a user -->
					</div>
				</div>
			</form>
		</div>
		</div>

		<!-- Site footer -->
		<footer class="footer">
			<p>&copy; 2016 Williams DevOps, Inc.</p>
		</footer>

		</div> <!-- /container -->

	</body>
</html>