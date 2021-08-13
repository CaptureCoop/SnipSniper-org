<?php
	
	require_once("utils.php");
	
	if(isset($_GET["param1"])) $param1 = $_GET["param1"];
	if(isset($_GET["param2"])) $param2 = $_GET["param2"];
	if(isset($_GET["param3"])) $param3 = $_GET["param3"];

	$sites = array("home", "about", "download", "wiki", "dsgvo", "impressum", "l", "404");
	global $page;
	$page = $sites[0];

	if(isset($param1)) {
		$found = false;
		foreach($sites as $cSite) {
			if($cSite == $param1) {
				$page = $cSite;
				$found = true;
			}
		}
		if(!$found)
			$page = "404";
	}

	global $path;
	if(isset($param1))
		$path .= "/$param1";
	if(isset($param2))
		$path .= "/$param2";
	if(isset($param3))
		$path .= "/$param3";

	$isMobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	
	//Load main template
	require_once("templates/main.php");

?>
