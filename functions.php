<?php 
	function loadPage(){
		if(isset($_GET["p"])){
			$page = $_GET["p"];

			if(file_exists("page_".$page.".php")){
				require_once("page_".$page.".php");
			}else{
				require_once("page_home.php");
			}
		}else{
			require_once("page_home.php");
		}
	}
?>