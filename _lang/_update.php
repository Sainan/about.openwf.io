<?php
php_sapi_name() == "cli" or die("CLI only!");

$source = json_decode(file_get_contents("en.json"), true);
foreach (["de"] as $code)
{
	$target = json_decode(file_get_contents("$code.json"), true);
	$rewritten = [];
	foreach ($source as $key => $value)
	{
		if (array_key_exists($key, $target))
		{
			$rewritten[$key] = $target[$key];
		}
		else
		{
			$rewritten[$key] = "[UNTRANSLATED] ".$source[$key];
		}
	}
	file_put_contents("$code.json", json_encode($rewritten, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
}
