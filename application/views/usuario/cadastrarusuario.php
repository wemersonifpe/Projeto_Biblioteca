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
        <title>Adicionar cadastro</title>

        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <h1>Adicionar Usuario</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Inicio</a></li>
                    <li class="active">Adicionar Usuario</li>
                </ol>

                <!--formulario de novo cadastro-->
                <form action="/usuarios/salvar" name="form_add" method="post">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <label>Nome</label>
                            <input type="text" name="nome" value="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <label>CPF</label>
                            <input type="text" name="cpf" value="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <label>Login</label>
                            <input type="text" name="login" value="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label>Senha</label>
                            <input type="text" name="senha" value="" class="form-control">
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