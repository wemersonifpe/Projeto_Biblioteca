<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cadastro de usuarios">
        <title>Multas</title>

        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <h1>Adicionar Multa</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Sair</a></li>
                    <li class="active">Adicionar Multa</li>
                </ol>

                <!--formulario de novo cadastro-->
                <form action="/multas/salvar" name="form_add" method="post">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <label>Usuario_id</label>
                            <input type="text" name="usuario_id" value="<?php echo $usuario->id?>" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <label>Valor</label>
                            <input type="text" name="valor" value="" class="form-control">
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