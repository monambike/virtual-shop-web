<?php?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<footer>
			<br>
			<div id="footer-div1">
				<address>
					<ul>
						<li>4768  Stratford Drive</li>
						<li>Kona, Hawaii</li>
						<li>ZIP Code: 96740</li>
						<li>808-334-4471</li>
						<li>a8uqe3zxn6j@powerencry.com</li>
					</ul>
				</address>
			</div>
			<div id="footer-div2">
				Most asked products:
				<ol>
					<a href="#"><li>Product (1)</li></a>
					<a href="#"><li>Product (2)</li></a>
					<a href="#"><li>Product (3)</li></a>
					<a href="#"><li>Product (4)</li></a>
					<a href="#"><li>Product (5)</li></a>
					<a href="#"><li>Product (6)</li></a>
					<a href="#"><li>Product (7)</li></a>
					<a href="#"><li>Product (8)</li></a>
				</ol>
			</div>
			<div id="footer-div3">
				<p>
					Welcome to Shop LTDA., your number one source for all things of home appliances. We're dedicated to providing you the best of home appliances, with a focus on dependability, customer service, and always doing it witha smile in our faces.


					We're working to turn our passion for home appliances into a booming online store. We hope you enjoy our products as much as we enjoy offering them to you.


					Sincerely,

					John
				</p>
			</div>
			<span>Creative Commons 2020</span>
		</footer>
		<script type="text/javascript">
			var lastScroll = 0;
			var menu = document.getElementById("top-menu");
			var navbar = document.getElementById("navbar");

			window.onscroll = function(e){
				if(window.matchMedia("(orientation: portrait)").matches){
					var actualScroll = document.documentElement.scrollTop;

					if(actualScroll > lastScroll && actualScroll > "400"){
						console.log("descendo");
						menu.style.display = "none";
					}else if(actualScroll < lastScroll && actualScroll > "400"){
						console.log("subindo");
						menu.style.display = "block";
					}else{
						menu.style.display = "none";
					}

					lastScroll = actualScroll;					
				}else if(window.matchMedia("(orientation: landscape)").matches){
					menu.style.display = "none";
				}
			}

			function openMenu(){
				navbar.style.width = "100%";
				menu.style.marginLeft = "100%";
			}
			function closeMenu(){
				navbar.style.width = "0";
				menu.style.marginLeft = "0";
			}
		</script>
	</body>
</html>