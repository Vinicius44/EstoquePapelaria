	
	<?php 


		if(isset($_GET["id"])){
			$idExcluir = (int)$_GET["id"];
			$dadosExcluidos = Painel::deletar("tb_estoque", $idExcluir);
			header('Location: '.INCLUDE_PATH);
		}

		$paginaAtual = isset($_GET["pagina"]) ? (int)$_GET["pagina"] : 1;
		$porPagina = 3;

		$dados = Painel::selectAll("tb_estoque", ($paginaAtual - 1) * $porPagina, $porPagina);
	

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

					

					foreach($dados as $key => $value){


				?>
					<tr>
						<td><?php echo $value["produto"]?></td>
						<td><?php echo $value["unidade"]?></td>
						<td><?php echo $value["valor_custo"]?></td>
						<td><?php echo $value["fornecedor"]?></td>
						<td><?php echo $value["grupo"]?></td>
						<td><a class="editar_btn"href="<?php echo INCLUDE_PATH ?>editar?id=<?php echo $value["id"]; ?>">EDITAR</a></td>
						<td><a class="deletar_btn" href="<?php INCLUDE_PATH ?>?id=<?php echo $value["id"]; ?>">DELETAR</a></td>
					</tr>



				<?php

					}



				?>
					
		</table>

		<!--<div class="div_paginacao">
			<a href="" class="paginacao">1</a>
			<a href="" class="paginacao">2</a>
			<a href="" class="paginacao">3</a>
		</div>-->

		<?php

			$totalPaginas = ceil(count(Painel::selectAll("tb_estoque"))  / $porPagina);

			for ($i=1; $i <= $totalPaginas ; $i++) { 
				if($i == $paginaAtual){
					echo "<a href='".INCLUDE_PATH."?pagina=".$i."' class='paginacao'>".$i."</a>";
				}else{
					echo "<a href='".INCLUDE_PATH."?pagina=".$i."' class='paginacao'>".$i."</a>";
				}
			}

		?>