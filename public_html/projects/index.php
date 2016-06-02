<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "MY PAGE TITLE";
?>
<?php require_once(dirname(__DIR__) . "/php/partials/head-utils.php"); ?>
<!-- Example row of columns -->
<div class="row">
	<div class="col-12">
		<img src="../img/projects2.jpg" alt="Projects Image" class="full-width-img" height="500px">
	</div>
	<div class="container">
		<div class="col-lg-12">
			<h2>Projects</h2>
			<p><em>Increased effectiveness:</em>
				There is enormous waste in a typical IT environment with people waiting for other people, other
				machines, new software or they are stuck solving the same problems over and over. People like to be
				productive in their work and the time spent churning causes frustration and unhappiness. When people
				get rid of the unsatisfying parts of their job and can instead spend that time adding value to the
				organization, everyone benefits.
				Automated deployments and standardized production environments, key aspects of DevOps, make
				deployments predictable and free people from routine repetitive tasks to go do more creative things.
			</p>
			<a href="../contact/index.php" class="btn btn-primary">Contact Me</a>
		</div>
	</div>
</div>
</div>
<?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>
</body>
</html>