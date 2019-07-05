
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos"-->
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Lista de Emprestimos</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Lista de Emprestimos</h1>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">Codigo do Aluno</th>
						<th class="text-right">Codigo do Livro</th>
						<th class="text-right">Data do Emprestimo</th>
                        <th class="text-right">Data da Devolucao</th>
                        <th class="text-center">Ações</th>
					</tr>
                </thead>
                <br/>

				<?php
					$contador = 0;
					foreach ($emprestimos as $emprestimo) {
						echo '<tr>';
							echo '<td class="text-right">'.$emprestimo->usuario_id.'</td>';
							echo '<td class="text-right">'.$emprestimo->livro_id.'</td>';
							echo '<td class="text-right">'.$emprestimo->dataemprestimo.'</td>';
							echo '<td class="text-right">'.$emprestimo->datadevolver.'</td>';
							echo '<td class="text-center">';
                                echo '<a  href="/multas/inserir/'.$emprestimo->usuario_id.'"title=Gerar multa" class=btn btn-primary btn-block">Multar</a>';
								echo '<a  href="/emprestimos/apagar/'.$emprestimo->id.'"title=Apagar cadastro" class=btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
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