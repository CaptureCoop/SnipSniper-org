body{
	font-family:"Segoe UI";
	margin:0px;
	<!--background-color:#affe00;-->
}

h1{
	text-align: center;
	<?php if ($isMobile): ?>
		font-size: 8vw;
	<?php else: ?>
		font-size: 4vw;
	<?php endif ?>
}

h2{
	text-align: center;
	<?php if ($isMobile): ?>
		font-size: 8vw;
	<?php else: ?>
		font-size: 2vw;
	<?php endif ?>
}

<?php
	$tabs = 5;
?>

<?php if ($isMobile): ?>
	.nav{
		width:90%;
		margin-left:5%;
		font-size: 4vw;
	}
	.mobileSpacer {
		width:5%;
		height:5%;
		float:left;
	}
<?php else: ?>
	.nav{
		width:50%;
		margin-left:25%;

		font-size: 2vw;
	}
	.mobileSpacer {
		width:25%;
		height:10%;
		float:left;
	}
<?php endif ?>


.navTab{
	width:<?php echo(100 / $tabs); ?>%;
	float:left;
	text-align: center;
}
.navLink {
	color: inherit;
	text-decoration:none;
}

.hl{

}
.hl:hover{
	text-decoration: underline overline;
	text-decoration-color: grey;
}

#titleIcon {
	<?php
		if(!$isMobile) echo ("width:10vh;");
		else echo ("width:6vh;");
	?>
}

<?php if ($isMobile): ?>
#footer {
	font-size:4vw;
}

#content {
	font-size:4vw;
}
<?php endif ?>
