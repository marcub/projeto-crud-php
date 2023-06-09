<?php
	switch($_REQUEST["acao"]) {
		case "cadastrar":
			$sku = $_POST["sku"];
			$nome = $_POST["nome"];
			$descricao = $_POST["descricao"];
			$foto = $_POST["foto"];
			$cor = $_POST["cor"];
			$tamanho = $_POST["tamanho"];
			$estoque = $_POST["estoque"];
			$preco = $_POST["preco"];

			$sql = "INSERT INTO produtos (sku, nome, descricao, foto, cor, tamanho, estoque, preco) VALUES ('{$sku}', '{$nome}', '{$descricao}', '{$foto}', '{$cor}', '{$tamanho}', '{$estoque}', '{$preco}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastro concluído');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Cadastro não concluído');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;

		case "alterar":
			$sku = $_POST["sku"];
			$nome = $_POST["nome"];
			$descricao = $_POST["descricao"];
			$foto = $_POST["foto"];
			$cor = $_POST["cor"];
			$tamanho = $_POST["tamanho"];
			$estoque = $_POST["estoque"];
			$preco = $_POST["preco"];

			$sql = "UPDATE produtos SET
						sku='{$sku}',
						nome='{$nome}',
						descricao='{$descricao}',
						foto='{$foto}',
						cor='{$cor}',
						tamanho='{$tamanho}',
						estoque='{$estoque}',
						preco='{$preco}'
					WHERE
						sku=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Edição concluída');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Edição não concluída');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;
		case "excluir":

			$sql = "DELETE FROM produtos WHERE sku=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Exclusão concluída');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Exclusão não concluída');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;
	}
?>