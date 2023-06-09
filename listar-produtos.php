<h1>Produtos</h1>
<?php
	$sql = "SELECT * FROM produtos";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>SKU</th>";
			print "<th>Nome</th>";
			print "<th>Descrição</th>";
			print "<th>Foto</th>";
			print "<th>Cor</th>";
			print "<th>Tamanho</th>";
			print "<th>Estoque</th>";
			print "<th>Preço</th>";
			print "<th>Procedimentos</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->sku."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->descricao."</td>";
			print "<td>".$row->foto."</td>";
			print "<td>".$row->cor."</td>";
			print "<td>".$row->tamanho."</td>";
			print "<td>".$row->estoque."</td>";
			print "<td>".$row->preco."</td>";
			print "<td>
					<button onclick=\"location.href='?page=alterar&id=".$row->sku."'\" class='btn btn-success'>Alterar</button>
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->sku."'}else{false;}\" class='btn btn-danger'>Excluir</button>
				</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger'>Nenhum produto cadastrado!</p>";
	}
?>