
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos"-->
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Lista de livros</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.margin-button15{margin-bottom: 15px; }
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Lista de livros</h1>
			<a class="btn btn-success margin-button15" href="<?php echo base_url('livros/add'); ?>">Novo Livro</a>
			<a class="btn btn-success margin-button15" href="<?php echo base_url('emprestimos/listatodos'); ?>">Listar Emprestimos</a>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">Livro</th>
						<th class="text-right">Autor</th>
						<th class="text-right">Ano</th>
						<th class="text-right">Edição</th>
						<th class="text-right">Disponivel</th>
						<th class="text-center">Ações</th>
					</tr>
				</thead>

				<?php
					$contador = 0;
					foreach ($livros as $livro) {
						echo '<tr>';
							echo '<td>'.$livro->exemplar.'</td>';
							echo '<td class="text-right">'.$livro->autor.'</td>';
							echo '<td class="text-right">'.$livro->ano.'</td>';
							echo '<td class="text-right">'.$livro->edicao.'</td>';
							echo '<td class="text-right">'.$livro->disponibilidade.'</td>';
							echo '<td class="text-center">';
								echo '<a  href="/livros/editar/'.$livro->id.'"title=Editar cadastro" class=btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
								echo '<a  href="/livros/apagar/'.$livro->id.'"title=Apagar cadastro" class=btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
								echo '<a  href="/livros/detalhes/'.$livro->id.'"title=Detalhes" class=btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
							echo '</td>';
						echo '</tr>';
						$contador++;
					}
				?>
			</table>

			<div class="row">
				<div class="col-md-12">
					Total de Registro: <?php echo $contador ?>
				</div>
			</div>
			
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/bootstrap/jsp/bootstrap.min.js"></script>

</body>
</html>