
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de usuarios">
	<title>Lista de usuarios</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.margin-button15{margin-bottom: 15px; }
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Lista de usuarios</h1>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">Usuuario</th>
						<th class="text-right">cpf</th>
						<th class="text-right">login</th>
						<th class="text-center">Ações</th>
					</tr>
				</thead>

				<?php
					$contador = 0;
					foreach ($usuarios as $usuario) {
						echo '<tr>';
							echo '<td>'.$usuario->nome.'</td>';
							echo '<td class="text-right">'.$usuario->cpf.'</td>';
							echo '<td class="text-right">'.$usuario->login.'</td>';
							echo '<td class="text-center">';
								echo '<a  href="/usuarios/alterar/'.$livro->id.'"title=Editar cadastro" class=btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
								echo '<a  href="/usuarios/deletar/'.$livro->id.'"title=Apagar cadastro" class=btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
								echo '<a  href="/usuarios/detalhes/'.$livro->id.'"title=Detalhes" class=btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
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