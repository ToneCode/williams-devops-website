<?php
/**
 * require all composer dependencies; requiring the autoload file loads all composer packages at once
 * while this is convenient, this may load too much if your composer configuration grows to many classes
 * if this is a concern, load "/vendor/swiftmailer/autoload.php" instead to load just SwiftMailer
 **/
require_once(dirname(__DIR__) . "/vendor/autoload.php");
$swiftMessage = Swift_Message::newInstance();
try {
	// sanitize the inputs from the form: name, email, subject, and message
	// this assumes jQuery (not Angular will be submitting the form, so we're using the $_POST superglobal
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	// create Swift message
	$swiftMessage = Swift_Message::newInstance();
	// attach the sender to the message
	// this takes the form of an associative array where the Email is the key for the real name
	$swiftMessage->setFrom([$email => $name]);
	/**
	 * attach the recipients to the message
	 * notice this an array that can include or omit the the recipient's real name
	 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
	 **/
	$recipients = ["support@WilliamsDevOps.com" => "Williams DevOps"];
	$swiftMessage->setTo($recipients);
	// attach the subject line to the message
	$swiftMessage->setSubject($subject);
	/**
	 * attach the actual message to the message
	 * here, we set two versions of the message: the HTML formatted message and a special filter_var()ed
	 * version of the message that generates a plain text version of the HTML content
	 * notice one tactic used is to display the entire $confirmLink to plain text; this lets users
	 * who aren't viewing HTML content in Emails still access your links
	 **/
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");
	/**
	 * send the Email via SMTP; the SMTP server here is configured to relay everything upstream via CNM
	 * this default may or may not be available on all web hosts; consult their documentation/support for details
	 * SwiftMailer supports many different transport methods; SMTP was chosen because it's the most compatible and has the best error handling
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
	$mailer = Swift_Mailer::newInstance($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);
	/**
	 * the send method returns the number of recipients that accepted the Email
	 * so, if the number attempted is not the number accepted, this is an Exception
	 **/
	if($numSent !== count($recipients)) {
		// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
		throw(new RuntimeException("unable to send email"));
	}
	// report a successful send
	echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Williams DevOps</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"
				  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
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
								<li><a href="index.php">Home</a></li>
								<li><a href="about/index.php">About</a></li>
								<li><a href="projects/index.php">Projects</a></li>
								<li><a href="contact/index.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVBAR -->
		<!-- Jumbotron -->
		<div class="container">
			<div class="jumbotron text-center">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<img src="img/devops-svg.png" alt="DevOps Illustrated" style="width:326px;" height="351px">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
						<h1>Enterprise capabilities<br>Williams DevOps</h1>
						<p class="lead">"When your Ops folks start thinking about development and your Dev folks starting
							thinking about Operations, you have a single team that works together with continuous development,
							continuous testing and continuous deployments".<a href="http://www.newrelic.com" target="_blank">Newrelic</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Example row of columns -->
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2>DevOps</h2>
					<p class="text-danger">
					<p>Companies that embrace the DevOps have more frequent deploys, which allows them to introduce new
						features more often in a more stable environment. The typical tension between Development and
						Operations is gone and everyone is more effective.</p>
				</div>
				<div class="col-lg-4">
					<h2>Continuous Integration</h2>
					<p>The phrase continuous integration (CI) came out of the Extreme Programming process and was one of its
						original guidelines. Essentially, developers integrate their code into the code repository at least
						once a day (and preferably more often). Without continuous integration, the odds of one developer’s
						changes conflicting with another developer’s changes are very high.</p>
				</div>
				<div class="col-lg-4">
					<h2>Continuous Deployment</h2>
					<p>Continuous deployment is the next step of continuous delivery: Every change that passes the automated
						tests is deployed to production automatically. Continuous deployment should be the goal of most
						companies that are not constrained by regulatory or other requirements.</p>
				</div>
			</div>
		</div>
		<div class="footer">
			<!-- Site footer -->
			<footer>
				<p>&copy; 2016 Williams DevOps, Inc.</p>
			</footer>
			<!-- /container -->
		</div>
	</body>
</html>

