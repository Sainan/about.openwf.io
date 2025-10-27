<!DOCTYPE html>
<html>
<head>
	<title>About OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>OpenWF is a software suite centered around customizing Warframe, including:</p>
		<ul>
			<li><b>SpaceNinjaServer</b> — an <a href="https://openwf.io/SpaceNinjaServer.git">open-source</a> reimplementation of the game's web services. As we have custom server software, OpenWF avoids interference with the live game while allowing full customization of savedata.</li>
			<li>The <b>Bootstrapper</b> — our main DLL patching the client to connect to custom servers, but for newer versions, it also has some QoL features and cheats as well as a scripting API, label replacements and metadata patches, allowing for extensive customization of the experience. <a href="https://onlyg.it/OpenWF/Mods" target="_blank">Browse mods.</a></li>
		</ul>
		<a href="guide<?=$ext;?>" class="btn btn-primary">Get Started</a>
		<h3 class="mt-3">Preservation</h3>
		<p>OpenWF works entirely offline, so the versions supported by OpenWF will always be available to play and revisit, and it is indeed already possible to <a href="old-versions<?=$ext;?>">revisit old versions</a>.</p>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
