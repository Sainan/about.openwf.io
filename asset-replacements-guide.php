<?php require "_components/loc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=loc("arep.title");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p><?=loc("arep.desc");?></p>
		<p>
			<?=loc("arep.what");?><br/>
			<?=loc("arep.explore");?>
		</p>
		<ol>
			<li><?=loc("arep.1");?></li>
			<li><?=loc("arep.2");?></li>
			<li><?=loc("arep.3");?></li>
			<li><?=loc("arep.4");?></li>
			<li><?=loc("arep.5");?></li>
			<li><?=loc("arep.6");?></li>
			<li><?=loc("arep.7");?></li>
		</ol>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
