@font-face {
    font-family: "atkinson-regular";
    src: url("/AtkinsonHyperlegible-Regular.ttf");
}

@font-face {
    font-family: "atkinson-bold";
    src: url("/AtkinsonHyperlegible-Bold.ttf");
}

body{
	<?php /*font-family:"Segoe UI";*/ ?>
	font-family: 'atkinson-regular', sans-serif;
	margin:0px;
	<!--background-color:#affe00;-->
}

@media (prefers-color-scheme: light) {
    body {
        background-color: white;
        color: black;
    }
}

@media (prefers-color-scheme: dark) {
	body {
		background-color: rgb(13, 17, 23);
		color: rgb(234, 237, 242);
	}
	a {
		color: rgb(174, 255, 109);
	}
	a:visited:not(.navLink) {
		color: rgb(79, 124, 12);
	}
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
<?php endif ?>

#content {
	
	<?php if ($isMobile): ?>
		font-size:4vw;
		width: 95%;
		margin-left: 2.5%;
	<?php else: ?>
		width: 30%;
		margin-left: 35%;
	<?php endif ?>
}
