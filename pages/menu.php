	
	<?php 

	

	?>


	<p class="adicionar_txt">Adicionar produto ao estoque:</p>
		<a class="adicionar_btn" href="adicionar">ADICIONAR</a>

		<table>
			<tr>
				<th>PRODUTO</th>
				<th>UNIDADE</th>
				<th>VALOR DO CUSTO</th>
				<th>FORNECEDOR</th>
				<th>GRUPO</th>
				<th></th>
				<th></th>
			</tr>
			
				<!--<td>LÁPIS</td>
				<td>23</td>
				<td>5,00</td>
				<td>GENERICO</td>
				<td>DIVERSOS</td>
				<td><a class="editar_btn"href="">EDITAR</a></td>
				<td><a class="deletar_btn" href="">DELETAR</a></td>-->

				<?php

					$dados = Painel::selectAll("tb_estoque");

					foreach($dados as $key => $value){


				?>
					<tr>
						<td><?php echo $value["produto"]?></td>
						<td><?php echo $value["unidade"]?></td>
						<td><?php echo $value["valor_custo"]?></td>
						<td><?php echo $value["fornecedor"]?></td>
						<td><?php echo $value["grupo"]?></td>
						<td><a class="editar_btn"href="<?php echo INCLUDE_PATH ?>editar?id=<?php echo $value["id"]; ?>">EDITAR</a></td>
						<td><a class="deletar_btn" href="<?php INCLUDE_PATH ?>deletar">DELETAR</a></td>
					</tr>


				<?php

					}

				?>
					
		</table>