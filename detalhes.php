<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>TechNivek | Detalhes</title>
<link rel="shortcut icon" href="img/smartphone.png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
	session_start();
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

// Se não estiver vazia a variável cd, vai executar o código 	
if(!empty($_GET['cd'])){
	$cd_celular = $_GET['cd'];
	$consulta = $cn ->query("select * from vw_celular where cd_celular='$cd_celular'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
// Se estiver vazia, vai direcionar para a página index
} else{
	header('location:index.php');
}
	?>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1">
			 <h1><center>Detalhes do Produto</center></h1>
			 <br>
			 <img src="img/<?php echo $exibe['ds_foto'];?>" class="img-responsive" style="width:100%;">
			
			 <!-- 
			# Fotos adicionais se necessário
			<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://placehold.it/900x640" class="img-responsive"></div>
			<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://placehold.it/900x640" class="img-responsive"></div>
			-->

		</div>
 		
        <div class="col-sm-7"><h1><?php echo $exibe['nm_celular'];?></h1>
		    <h4><?php echo $exibe['ds_descricao'];?></h4>
			<br>
		    <h4><b>Marca: </b><?php echo $exibe['ds_marca'];?></h4>
			<h4><b>Em Estoque: </b><?php echo $exibe['qt_estoque'];?></h4>
			<h4><b>Memória: </b><?php echo $exibe['ds_memoria'];?></h4>
		    <h1><b>R$ <?php echo number_format ($exibe['vl_preco'],2,',','.');?></b><h1>
		    <button class="btn btn-lg btn-success">Comprar</button>
        </div>	
	</div>			
</div>
	
	<?php
	include 'rodape.html';
	?>
	
</body>
</html>