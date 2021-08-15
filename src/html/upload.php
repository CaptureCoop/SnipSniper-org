<?php
	require("../php/uploadPassword.php");

	if($_POST["password"] == $password) {
		$filename = basename($_FILES["file"]["name"]);
		$targetDir = "jars/";
		$targetFile = $targetDir . "SnipSniper " . $_POST["version"] . ".jar";
		$filetype = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
		
		if($_FILES["file"]["size"] > 5000000) {
			echo("FILE TOO LARGE");
			exit();
		}
		
		if($filetype != "jar") {
			echo("ONLY JAR");
			exit();
		}
		
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
			echo("SUCCESS 1/2...");
			if(copy($targetFile, $targetDir . "SnipSniper.jar")) {
				echo("SUCCESS 2/2");
			} else {
				echo("UPLOAD FAIL 2/2");
			}
		} else {
			echo("UPLOAD FAIL");
		}
		exit();
	}
	
	echo "BAD PASSWORD";
?>