<h2 class="titulo_txt">ADICIONAR UM PRODUTO</h2>
<form method="post" class="adicionar_form">

	<div class="w390px" style="margin-right: 10px">
	<label>Nome do produto:</label>
	<select class="w100" name="produto">
		<option>Lápis</option>
		<option>Estojo</option>
		<option>Borracha</option>
		<option>Mochila</option>
	</select>
	</div>

	<div class="w390px"  style="margin-right: 10px">
	<label>Unidade:</label>
	<input class="w100" type="number" name="unidade" required>
	</div>

	<div class="w390px">
	<label>Valor do custo:</label>
	<input class="w100"type="number" name="valor" required>
	</div>

	<div class="w50px" style="margin-right: 10px;">
	<label>Fornecedor:</label>
	<input class="w100"type="text" name="fornecedor" required>
	</div>	

	<div class="w50px">
	<label>Grupo:</label>
	<input class="w100" type="text" name="grupo" required>
	</div>

	<input type="hidden" name="tabela" value="tb_estoque">
	<input type="submit" value="Enviar" class="enviar_adicionar" name="acao_adicionar">


	
		



	<?php

		if(isset($_POST['acao_adicionar'])){

			
			


			if(Painel::insert($_POST) == true){
				echo "<p>O produto foi enviado com sucesso.</p>";
			}else{
				echo "<p>O produto não foi enviado, tente novamente.</p>";
			}


		}
	?>
</form>