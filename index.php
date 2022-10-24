<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>/css/style.css">
	<!--fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https: //fonts.googleapis.com/css2? família= Rubik:wght@300;400 & display=swap" rel="stylesheet">
	<title>Estoque Papelaria</title>
</head>
<body>
	<div class="center">
	<header>
		<h1>ESTOQUE DE PAPELARIA</h1>
	</header>
	<section>
		<?php

			$url = isset($_GET["url"])? $_GET["url"]: "home" ;

			if($url == "home"){
				include("pages/menu.php");
			}else if($url == "adicionar"){
				include("pages/adicionar_produto.php");
			}else if($url == "editar"){
				include("pages/editar_produto.php");
			}

		?>
	</section>

	<footer>
		
	</footer>
</div><!--center-->
</body>
</html>