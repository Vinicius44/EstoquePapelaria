<?php


	/**
	 * 
	 */
	class Painel
	{
		
	

		public static function insert($dados){


			$table_name = $_POST["tabela"];
			$query = "INSERT INTO `$table_name` VALUES (null";
			


			foreach ($dados as $key => $value) {
				$nome = $key;
				$valor = $value;
				if($key == "tabela" || $key == "acao_adicionar"){
					continue;
				}
				$query.= ",?";
				$parametros[] = $value;

			}

			$query.= ")";
			echo $query;
			print_r($parametros);

			$sql = Mysql::conectar()->prepare($query);
			$sql->execute($parametros);
		}
	}



?>