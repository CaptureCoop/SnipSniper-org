<?php
	$link = $param2;
	if($link == "github")
		redirect("https://github.com/CaptureCoop/SnipSniper");
	else if($link == "dl")
		redirect("Https://github.com/CaptureCoop/SnipSniper/releases/latest/download/SnipSniper.jar");
	else
		redirect("https://snipsniper.org/home");

	function redirect($url){
		header('Location: ' . $url);
	}
?>
