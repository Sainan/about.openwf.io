<?php
$lang_names = [
	"en" => "English",
	"de" => "Deutsch",
];

$lang_code = $_GET["lang"] ?? "en";
if (!array_key_exists($lang_code, $lang_names))
{
	$lang_code = "en";
}

$data = json_decode(file_get_contents(__DIR__."/../_lang/$lang_code.json"), true);

function loc($key)
{
	global $data;
	$str = $data[$key];
	if (substr($str, 0, 15) == "[UNTRANSLATED] ")
	{
		$str = substr($str, 15);
	}
	return $str;
}
