<?php
	$pg = null;
	if(isset($_GET["p"])){
		$pg = $_GET["p"];
	}
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--CSS e Scripts-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<!--Ícones-->
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<header>
			<div>
				<img id="logo" src="images/store_icon.png">
				<a href="?p=home"><h1><span>ELETRO</span>LOJINHA&nbsp;LTDA.</h1></a>
			</div>
			<nav>
				<ul>
					<?php
						echo $pg;
					?>
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