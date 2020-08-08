<?php
	$pg = null;
	if(isset($_GET["p"])){
		$pg = $_GET["p"];
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>header</title>
	</head>
	<body>
		<header>
			<div id="top-menu">
				<span onmousedown="openMenu();">&#9776;&nbsp;MENU</span>
			</div>

			<div id="header-title">
				<img id="logo" src="images/favicon.ico" alt="Ícone do site">
				<h1><a href="?p=home"><span>ELETRO</span>LOJINHA&nbsp;LTDA.</a></h1>
			</div>

			<nav id="navbar">
				<ul>
					<li>
						<span id="navbar-close-button" onmousedown="closeMenu()">X</span>
					</li>
					<li <?php if($pg != "products" && $pg != "contact" && $pg != "about"){echo"class='selected'";}?>>
						<a href="?p=home">INÍCIO</a>
					</li>
					<li <?php if($pg=="products"){echo"class='selected'";}?>>
						<a href="?p=products">PRODUTOS</a>
					</li>
					<li <?php if($pg=="contact"){echo"class='selected'";}?>>
						<a href="?p=contact">CONTATO</a>
					</li>
					<li <?php if($pg=="about"){echo"class='selected'";}?>>
						<a href="?p=about">SOBRE NÓS</a>
					</li>
				</ul>
			</nav>
		</header>
	</body>
</html>