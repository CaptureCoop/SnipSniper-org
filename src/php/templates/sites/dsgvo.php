<?php 
	$languages = array("en", "de");
	$uL = $languages[0];
	if(isset($param2) && in_array($param2, $languages)){
		$uL = $param2;
	}
?>

<div align="center">
	<a href="/dsgvo/de">Deutsch</a>
	<a href="/dsgvo/en">English</a>
</div>

<div style="width:75%;margin-left:12.5%;">
	<?php require_once("dsgvo/" . $uL . ".php"); ?>
</div>
