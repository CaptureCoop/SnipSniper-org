<?php

	function redirect_to($url) {
		header("Location: " . $url);
		exit();
	}

	function hl($word){
		$array = str_split($word);
		$html = "";
		foreach ($array as $letter){
			if($letter != " "){
				$html .= "<span class=\"hl\">{$letter}</span>";
			} else {
				$html .= " ";
			}
		}
		return $html;
	}

?>