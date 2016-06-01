<?php
/**
 * require all composer dependencies; requiring the autoload file loads all composer packages at once
 * while this is convenient, this may load too much if your composer configuration grows to many classes
 * if this is a concern, load "/vendor/swiftmailer/autoload.php" instead to load just SwiftMailer
 **/
require_once(dirname(__DIR__) . "../../vendor/autoload.php");
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
			<img src="../img/devops-contact.jpg" alt="Contact Image" class="full-width-img" height="450px">
		</div>
		<div class="container">
		<div class="col-lg-12">
			<h2>Contact</h2>
			<p>Please email support@WilliamsDevOps.com</p>
			<form class="form-horizontal well" action="index.php">
				<div class="form-group">
					<label for="name">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
		</div>
		</div>
		</div>

		<!-- Site footer -->
		<footer class="footer">
			<p>&copy; 2016 Williams DevOps, Inc.</p>
		</footer>

		</div> <!-- /container -->

	</body>
</html>