<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Login</title>
    	<!-- Bootstrap -->
    	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- CSS -->
      <link href="/bootstrap/css/login.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <center>
              <div class='header-box'>
                  <h1>Biblioteca</h1>
              </div>

              <div class="informativo">
                  <h1>Reserva de Livros</h1>
                  <div class="conteudo_info">
                      <div class="info">
                        <h1>Homer</h1><br/>
                        <div class="form-login">
                          <a class="btn btn-success btn-block" href="<?php echo base_url('usuarios/add'); ?>">Cadastrar Aluno</a><br/>
                          <a class="btn btn-success btn-block" href="<?php echo base_url('admin/'); ?>">Bibliotecaria</a><br/>
                          <a class="btn btn-success btn-block" href="<?php echo base_url('reservas/add'); ?>">Reservar Livros</a>
                        </div>
                      </div>

                      <div class="info">
                          <div class="erro">
                              <!--Aqui vc colca seu back-end: if(erro)-->
                                <div class="alert alert-danger">ALUNO</div>
                              <!--endif-->
                          </div>

                          <form action="/usuarios/autenticar" name="from_login" method="post" class="form-login">
                              <label>Usuario</label>
                              <input type="text" class="form-control" name="login" value=""/>
                              <label>Senha</label>
                              <input type="password" class="form-control" name="senha" value="" />
                              <br>
                              <button type="submit" class="btn btn-primary btn-block">Login</button>
                          </form>
                          <br/>
                      </div>
                  </div>
              </div>
              
            </center>
        </div>
    </body>
</html>

