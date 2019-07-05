
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos"-->
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Lista de Multas</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Lista de Multas</h1>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">Codigo da Multa</th>
						<th class="text-center">Codigo do Aluno</th>
						<th class="text-center">Valor da Multa</th>
					</tr>
                </thead>
                <br/>

				<?php
					$contador = 0;
					foreach ($multas as $multa) {
						echo '<tr>';
							echo '<td class="text-center">'.$multa->id.'</td>';
							echo '<td class="text-center">'.$multa->usuario_id.'</td>';
							echo '<td class="text-center">'."R$ ".$multa->valor.'</td>';							
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