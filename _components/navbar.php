<?php
function getQueryForLang($code)
{
	if ($code != "en")
	{
		return "?lang=".$code;
	}
	return "";
}

$query = getQueryForLang($lang_code);
$ext = (substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : "") . $query;
$path = strtok($_SERVER["REQUEST_URI"], '?');
?>
<nav class="navbar navbar-expand-sm bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="/<?=$query;?>" <?php if ($path == "/"): ?> onclick="event.preventDefault();" <?php endif; ?>>OpenWF</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-content">
			<ul class="navbar-nav me-auto mb-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?=((substr($path, 0, 6) == "/guide" || substr($path, 0, 25) == "/asset-replacements-guide") ? " active" : ""); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=loc("guides");?></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item<?=(substr($path, 0, 6) == "/guide" ? " active" : ""); ?>" href="/guide<?=$ext;?>"><?=loc("setup");?></a></li>
						<li><a class="dropdown-item<?=(substr($path, 0, 7) == "/import" ? " active" : ""); ?>" href="/import<?=$ext;?>"><?=loc("import");?></a></li>
						<li><a class="dropdown-item<?=(substr($path, 0, 25) == "/asset-replacements-guide" ? " active" : ""); ?>" href="/asset-replacements-guide<?=$ext;?>"><?=loc("arep");?></a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link<?=(substr($path, 0, 11) == "/contribute" ? " active" : ""); ?>" href="/contribute<?=$ext;?>"><?=loc("contribute");?></a></li>
				<li class="nav-item"><a class="nav-link" href="https://discord.gg/PNNZ3asUuY" target="_blank">Discord</a></li>
			</ul>
			<ul class="navbar-nav ms-auto mb-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=$lang_names[$lang_code];?></a>
					<ul class="dropdown-menu">
						<?php foreach ($lang_names as $code => $name): ?>
							<li><a class="dropdown-item<?=($lang_code == $code ? " active" : ""); ?>" href="<?=$path.getQueryForLang($code); ?>"><?=$name;?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<script>
	// Disable navbar links that point back to this page.
	document.querySelectorAll(".navbar-nav .nav-link.active, .navbar-nav .dropdown-item.active").forEach(elm =>
	{
		elm.onclick = (event) => { event.preventDefault() };
	});
</script>