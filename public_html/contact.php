<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Williams DevOps</title>
		<!-- Bootstrap core CSS -->
		<link href="images/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="images/style.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="images/style.css" rel="stylesheet">
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
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="projects.html">Projects</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVBAR -->
		<div class="col-12">
			<img src="images/devops-contact.jpg" alt="DevOps Contact" style="width:100%;" height="450px">
		</div>
		<div class="col-lg-12">
			<h2>Contact</h2>
			<p>Please email support@WilliamsDevOps.com</p>
			<form class="form-horizontal" role="form" method="post" action="index.html">
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