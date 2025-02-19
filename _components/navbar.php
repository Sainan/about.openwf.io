<?php
$ext = substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : "";
?>
<nav class="navbar navbar-expand bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="/" <?php if ($_SERVER["REQUEST_URI"] == "/"): ?> onclick="event.preventDefault();" <?php endif; ?>>OpenWF</a>
		<ul class="navbar-nav me-auto mb-0">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle<?=((substr($_SERVER["REQUEST_URI"], 0, 6) == "/guide" || substr($_SERVER["REQUEST_URI"], 0, 25) == "/asset-replacements-guide") ? " active" : ""); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Guides</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item<?=(substr($_SERVER["REQUEST_URI"], 0, 6) == "/guide" ? " active" : ""); ?>" href="/guide<?=$ext;?>">Setup</a></li>
					<li><a class="dropdown-item<?=(substr($_SERVER["REQUEST_URI"], 0, 25) == "/asset-replacements-guide" ? " active" : ""); ?>" href="/asset-replacements-guide<?=$ext;?>">Asset Replacements</a></li>
				</ul>
			</li>
		</ul>
		<ul class="navbar-nav ms-auto mb-0">
			<li class="nav-item">
				<a class="nav-link" href="https://discord.gg/PNNZ3asUuY" target="_blank">Discord</a>
			</li>
		</ul>
	</div>
</nav>
<script>
	// Disable navbar links that point back to this page.
	document.querySelectorAll(".navbar-nav .nav-link.active, .navbar-nav .dropdown-item.active").forEach(elm =>
	{
		elm.onclick = (event) => { event.preventDefault() };
	});
</script>