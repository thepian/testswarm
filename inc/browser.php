<?php
	$browser = "";
	$version = "";
	$ip = $_SERVER['REMOTE_ADDR'];
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$useragent_id = 0;

	$lowerUA = strtolower($useragent);

	if ( ereg(".+(rv|it|resto|ie)[\/: ]([0-9a-z.]+)", $lowerUA, $match) ) {
		$version = $match[2];
	}

	if ( strpos($lowerUA, "chrome") > -1 ) {
		$browser = "chrome";
	} else if ( strpos($lowerUA, "webkit") > -1 ) {
		$browser = "webkit";
	} else if ( strpos($lowerUA, "presto") > -1 ) {
		$browser = "presto";
	} else if ( strpos($lowerUA, "gecko") > -1 ) {
		$browser = "gecko";
	} else if ( strpos($lowerUA, "msie") > -1 ) {
		$browser = "msie";
	}
?>
