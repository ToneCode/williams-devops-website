<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Williams DevOps";
?>
<?php require_once("php/partials/head-utils.php"); ?>


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
					continuous testing and continuous deployments".<a href="http://www.newrelic.com"
																					  target="_blank">Newrelic</a>
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
</div>
<?php require_once("php/partials/footer.php"); ?>
</body>
</html>

