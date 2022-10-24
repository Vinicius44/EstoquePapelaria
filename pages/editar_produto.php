
<?php
	
	if(isset($_GET["id"])){
		$idEditar = (int)$_GET['id'];
		$editarDados = Painel::select("tb_estoque","id=?", array($idEditar));

	
			
		
		
	}




?>

<h2 class="titulo_txt">EDITAR PRODUTO</h2>

<form method="post" class="adicionar_form">

	<div class="w390px" style="margin-right: 10px">
	<label>Nome do produto:</label>
	<select class="w100" name="produto" >

		<?php
			foreach($editarDados as $key => $value){
				if($editarDados["produto"] == $value){
					echo "<option selected>".$editarDados["produto"]."</option>";
					break;
				}
			}

			switch ($editarDados["produto"]) {
				case 'Estojo':
				echo   "<option>Lápis</option>
						<option>Borracha</option>
						<option>Mochila</option>";
					break;

					case 'Lápis':
				echo   "<option>Estojo</option>
						<option>Borracha</option>
						<option>Mochila</option>";
					break;

					case 'Borracha':
				echo   "<option>Lápis</option>
						<option>Estojo</option>
						<option>Mochila</option>";
					break;

					case 'Mochila':
				echo   "<option>Lápis</option>
						<option>Borracha</option>
						<option>Estojo</option>";
					break;
				
				default:
					// code...
					break;
			}

		?>

	</select>
	</div>

	<div class="w390px"  style="margin-right: 10px">
	<label>Unidade:</label>
	<input class="w100" type="number" name="unidade"  value="<?php echo $editarDados["unidade"]?>" required>
	</div>

	<div class="w390px">
	<label>Valor do custo:</label>
	<input class="w100"type="number" name="valor_custo" value="<?php echo $editarDados["valor_custo"]?>" required>
	</div>

	<div class="w50px" style="margin-right: 10px;">
	<label>Fornecedor:</label>
	<input class="w100"type="text" name="fornecedor" value="<?php echo $editarDados["fornecedor"]?>"required>
	</div>	

	<div class="w50px">
	<label>Grupo:</label>
	<input class="w100" type="text" name="grupo"  value="<?php echo $editarDados["grupo"]?>" required>
	</div>


	<input type="hidden" name="id" value="<?php echo $editarDados["id"]?>">
	<input type="hidden" name="tabela" value="tb_estoque">
	<input type="submit" value="Enviar" class="enviar_adicionar" name="acao_editar">


	


	<?php

		if(isset($_POST['acao_editar'])){

			
			


			if(Painel::update($_POST) == true){
				echo "<p>O produto foi editado com sucesso.</p>";
			}else{
				echo "<p>O produto não foi editado, tente novamente.</p>";
			}


		}
	?>
</form>