<?php require "_components/loc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=loc("about.title");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p><?=loc("about.0");?></p>
		<ul>
			<li><?=loc("about.1");?></li>
			<li><?=loc("about.2");?></li>
		</ul>
		<a href="/guide<?=$ext;?>" class="btn btn-primary"><?=loc("about.cta");?></a>
		<h3 class="mt-3"><?=loc("preservation.title");?></h3>
		<p>
			<?=loc("preservation.0");?><br/>
			<?=loc("preservation.1");?>
		</p>
		<hr>
		<p><?=loc("tm_disclaimer");?></p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
