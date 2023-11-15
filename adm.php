<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TeckNivek | Logon de Usuário</title>
<link rel="shortcut icon" href="img/smartphone.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style type="text/css">
	.navbar{
	    margin-bottom: 0;
        background-color: black;
	}
</style>
	
</head>

<body>
	
<?php

	session_start();

    //Se a sessão estiver vazia ou diferente de 1 (administrador), redireciona para página index
	if(empty($_SESSION['STATUS']) || $_SESSION['STATUS'] != 1) {
       header('location:index.php');
    }

	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
?>
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Área administrativa</h2>
				<br>
				
				<a href="formProduto.php">			
				<button type="submit" class="btn btn-block btn-lg btn-primary">
					
					Incluir Produto
					
				</button>
					
				</a>
				
				
				<button type="submit" class="btn btn-block btn-lg btn-danger">
					
					Alterar / Excluir Produto
					
				</button>
				
				
				<button type="submit" class="btn btn-block btn-lg btn-primary">
					
					Vendas
					
				</button>
				
				
				<button type="submit" class="btn btn-block btn-lg btn-danger">
					
					Sair da àrea administrativa
					
				</button>
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
</body>
</html>