<?php
if (file_exists(dirname(__DIR__) . "/.env")) {
	$dotenv = parse_ini_file(dirname(__DIR__) . "/.env", true);
	foreach ($dotenv as $key => $value) {
		$_ENV[$key] = $value;
	}
}
?>
