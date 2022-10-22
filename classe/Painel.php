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
			
			$sql = Mysql::conectar()->prepare($query);
			$sql->execute($parametros);
			
			return true;
		}



		public static function selectAll($tabela){
			$query = "SELECT * FROM $tabela";
			$sql = Mysql::conectar()->prepare($query);
			$sql->execute();

			return $sql->fetchAll();
		}
	}



?>