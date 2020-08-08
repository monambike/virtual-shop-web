<?php
	$pg = null;
	if(isset($_GET["p"])){
		$pg = $_GET["p"];
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<header>
			<div id="top-menu">
				<span onmousedown="openMenu();">&#9776;&nbsp;MENU</span>
			</div>

			<div id="header-title">
				<img id="logo" src="images/favicon.ico">
				<h1><a href="?p=home"><span>ELETRO</span>LOJINHA&nbsp;LTDA.</a></h1>
			</div>

			<nav id="navbar">
				<ul>
					<li>
						<span id="navbar-close-button" onmousedown="closeMenu()">X</span>
					</li>
					<a href="?p=home">
						<li <?php if($pg != "products" && $pg != "contact" && $pg != "about"){echo"class='selected'";}?>>INÍCIO</li>
					</a>
					<a href="?p=products">
						<li <?php if($pg=="products"){echo"class='selected'";}?>>PRODUTOS</li>
					</a>
					<a href="?p=contact">
						<li <?php if($pg=="contact"){echo"class='selected'";}?>>CONTATO</li>
					</a>
					<a href="?p=about">
						<li <?php if($pg=="about"){echo"class='selected'";}?>>SOBRE NÓS</li>
					</a>
				</ul>
			</nav>
		</header>
	</body>
</html>