<?php
	
	$autoload = function($class){
	
		include('classe/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	define("INCLUDE_PATH", "http://localhost/Portf%c3%b3lio/Back-End/Projeto%20Papelaria/");



	//conectar com o banco de dados
	define("HOST", 'localhost');
	define("USER", "root");
	define("PASSWORD", "");
	define("DATABASE","projeto_papelaria");

	

?>