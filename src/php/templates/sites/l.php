<?php
	$link = $param2;
	if($link == "github")
		redirect("https://github.com/SvenWollinger/SnipSniper");
	else
		redirect("https://snipsniper.org/home");

	function redirect($url){
		header('Location: ' . $url);
	}
?>
