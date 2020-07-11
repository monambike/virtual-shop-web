<?php?>
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
				<a href="?p=home"><h1><span>ELETRO</span>LOJINHA LTDA.</h1></a>
			</div>
			<nav>
				<ul>
					<?php 
						if(isset($_GET["p"])){
							$pg = $_GET["p"];
							
						}
					?>
					<a href="?p=home" <?php if($pg="home"){echo"class='.selected'";}?> ><li>INÍCIO</li></a>
					<a href="?p=products" <?php if($pg="products"){echo"class='.selected'";}?> ><li>PRODUTOS</li></a>
					<a href="?p=contact" <?php if($pg="contact"){echo"class='.selected'";}?> ><li>CONTATO</li></a>
					<a href="?p=about" <?php if($pg="about"){echo"class='.selected'";}?> ><li>SOBRE NÓS</li></a>
				</ul>
			</nav>
		</header>
	</body>
</html>