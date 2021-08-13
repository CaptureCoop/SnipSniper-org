<?php
	$link = $param2;
	if($link == "github")
		redirect("https://github.com/SvenWollinger/SnipSniper");
	else if($link == "dl")
		redirect("Https://github.com/SvenWollinger/SnipSniper/releases/latest/download/SnipSniper.jar");
	else
		redirect("https://snipsniper.org/home");

	function redirect($url){
		header('Location: ' . $url);
	}
?>
