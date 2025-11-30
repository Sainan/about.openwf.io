<!DOCTYPE html>
<html>
<head>
	<title>Companion App | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>If you want to use the Warframe Companion App to view your inventory & world state from a SpaceNinjaServer instance, you'll need to patch the APK and setup the networking appropriately. The bulk of this is explained in <a href="https://onlyg.it/janisslsm/warframe-companion-patcher" target="_blank">the warframe-companion-patcher repository</a>.</p>
		<p>The only thing not covered is that the app will request many textures from SpaceNinjaServer, which in turn will look for them at <code>static/data/PublicExport/Lotus/Interface/...</code>. To populate them, you can:</p>
		<ul>
			<li>Export them from a game installation using <a href="https://github.com/Puxtril/Warframe-Exporter" target="_blank">Puxtril's Warframe Exporter</a>.</li>
			<li><a href="https://github.com/de-eznuts/textures" target="_blank">Download them from the internet.</a></li>
		</ul>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
