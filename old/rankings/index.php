<?php
	include '../config.php';
	include 'rankings/org.class.php';
?>
<!DOCTYPE html>
<html lang="english">
	<head>
		<title>H/O Org Rankings</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Le Script -->
		<script type="text/javascript" src="js/jscolor.js"></script>

	</head>
	<body>

		<div class="navbar navbar-inverse">
			<a class="navbar-brand" href="#">Change Rankings</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Edit</a>
				</li>
				<li>
					<a href="#">Preview</a>
				</li>
				<li>
					<a href="#">Back to Main Page</a>
				</li>
			</ul>
		</div>
		<div class="container-fluid">
		    <div class="container-fluid marketing container">
		        <div class="row-fluid" style="width: 40em;">
					<form action="addRankings()" method="POST" role="form">
						<!-- <legend>Edit Rankings</legend> -->
						<h1>Edit Rankings</h1><br><br>
<?php
		$org1 = 'ACM Club';
	    $org1rank = '2';
	    $org1color = ''; ?>
						<div class="form-group">
							<legend><?php echo $org1; ?></legend>
							<label for="<?php echo $org1; ?>">Edit Name</label>
							<input type="text" class="form-control" id="<?php echo $org1; ?>" placeholder="<? echo $org1; ?>"><br>
							<label for="<?php echo $org1; ?>">Edit Rank</label>
							<br>
							<input type="number" class="form-control" id="" placeholder="<?php echo $org1rank; ?>"><br>
							<label for="<?php echo $org1color; ?>">Edit Color</label>
							<br>
							<input type="color" class="form-control" id="" placeholder="<?php $org1color; ?>">
						</div>


						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="submit" class="btn btn-warning">Preview</button>
						<button class="btn btn-success">Add Another Org</button>
					</form>
					<?php

					?>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>
</html>