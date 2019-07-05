
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos"-->
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Adicionar Reserva</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			
			<h1>Reservar Livro</h1>
			<ol class="breadcrumb">
				<li><a href="/">Inicio</a></li>
				<li class="active">Reservar Livro</li>
			</ol>

			<!--formulario de novo cadastro-->
			<form action="/emprestimos/salvar" name="form_add" method="post">
				
				<div class="row">
					<div class="col-md-8">
						<label>Codigo do Usuario</label>
						<input type="text" name="usuario_id" value="<?php echo $this->session->userdata('usuario');?>" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<label>Codigo do Livro</label>
                        <input type="text" name="livro_id" value="<?php echo $livro->id?>" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<label>Data do Emprestimo</label>
						<input type="text" name="dataemprestimo" value="" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<label>Data da Devolução</label>
						<input type="text" name="datadevolver" value="" class="form-control">
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-2">
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