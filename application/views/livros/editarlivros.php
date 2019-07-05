<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Novo cadastro</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			
			<h1>Atualizar livro</h1>
			<ol class="breadcrumb">
				<li><a href="/">Inicio</a></li>
				<li class="active">Atualizar livro</li>
			</ol>

			<!--formulario de novo cadastro-->
			<form action="/livros/salvar" name="form_add" method="post">
				
				<!--input text EXEMPLAR do livro-->
				<div class="row">
					<div class="col-md-8">
						<label>Exemplar</label>
						<input type="text" name="exemplar" value="<?php echo $livro->exemplar?>" class="form-control">
					</div>
				</div>

				<!--input text AUTOR do livro-->
				<div class="row">
					<div class="col-md-8">
						<label>Autor</label>
						<input type="text" name="autor" value="<?php echo $livro->autor?>" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<label>Ano</label>
						<input type="text" name="ano" value="<?php echo $livro->ano?>" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<label>Edição</label>
						<input type="text" name="edicao" value="<?php echo $livro->edicao?>" class="form-control">
					</div>
				</div>

				<!--Select livro disponivel ou nao-->
				<div class="row">
					<div class="col-md-2">
						<label>Disponibilidade</label>
						<select name="disponibilidade" value="<?php echo $livro->disponibilidade?>" class="form-control">
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
						</select>
					</div>
				</div>
				<br/>

				<div class="row">
					<div class="col-md-2">
						<!--serve pra alterar pelo id-->
						<input type="hidden" name="id" value="<?php echo $livro->id?>">
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</div>

			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/bootstrap/jsp/bootstrap.min.js"></script>

</body>
</html>