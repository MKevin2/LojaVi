<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TechNivek | Login do Usuário</title>
	<link rel="shortcut icon" href="img/smartphone.png"> <!--color of logo: #267CF1-->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style>

.navbar{
	margin-bottom: 0;
	background-color: black;
}
	
</style>
</head>

<body>

    <?php
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho2.html';
	?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Logon de Usuário</h2>
				<br>
				<form name="frmusuario" method="post" action="validausuario.php">
					<div class="form-group">
						<label for="email">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
					</div>
				    <div class="form-group">
					    <label for="senha">Senha</label>
					    <input name="txtsenha" type="password" class="form-control" required id="senha">
				    </div>
				    <button type="submit" class="btn btn-lg btn-default">
					    <span class="glyphicon glyphicon-ok"> Entrar</span>
				    </button>

					<a href="formusuario.php">
				    	<button type="submit" class="btn btn-lg btn-link">
					    	Ainda não sou Cadastrado
				    	</button>
					</a>
				</form>			
			</div>
		</div>
	</div>

    <br>
    <br>

	<?php include 'rodape.html'?>
    </body>
</html>