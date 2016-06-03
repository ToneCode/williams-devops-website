<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Williams DevOps";
?>
<?php require_once(dirname(__DIR__) . "/php/partials/head-utils.php"); ?>


<div class="col-12">
	<img src="../img/devops-contact.jpg" alt="Contact Image" class="full-width-img" height="450px">
</div>
<div class="container">
	<div class="col-lg-12">
		<h2>Contact</h2>
		<p>Please email support@WilliamsDevOps.com</p>
		<form id="contact-form" class="form-horizontal well" action="<?php echo $PREFIX; ?>../php/mailer/mailer.php">
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
			<!-- reCAPTCHA -->
			<div class="g-recaptcha" data-sitekey="6LfvpyETAAAAAJv0Moi251Jy19iy3KNL5KxxyMaG"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>
		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
	</div>
</div>
</div>

<?php require_once(dirname(__DIR__) . "/php/partials/footer.php"); ?>

</body>
</html>