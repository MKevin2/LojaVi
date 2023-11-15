<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>TechNivek | Busca </title>
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
    }
</style>
	
</head>

<body>	
	
	<?php
	session_start();
    include 'conexao.php';
    include 'nav.php';
    include 'cabecalho.html';
	
    if(empty($_GET['txtBuscar'])){
        echo "<html><script>location.href='index.php'</script></html>";
    }
    $pesquisa = $_GET['txtBuscar'];
    $consulta1 = $cn->query("select * from vw_celular where nm_celular like concat('%', '$pesquisa', '%') or ds_marca like concat('%', '$pesquisa', '%')");

    if($consulta1->rowCount() == 0){
        echo "<html><script>location.href='erro2.php'</script></html>";
    }
    ?>
	
<div class="container-fluid">
    <?php while($exibe = $consulta1->fetch(PDO::FETCH_ASSOC)) { ?>
	    <div class="row" style="margin-top: 15px;">
		    <div class="col-sm-1 col-sm-offset-1"><img src="img/<?php echo $exibe['ds_foto']; ?>" class="img-responsive"></div>
		    <div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nm_celular']?></h4></div>
		    <div class="col-sm-2"><h4 style="padding-top:20px">R$ <?php echo number_format ($exibe['vl_preco'],2,',','.') ?></h4></div>
		
            <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
                <a href="detalhes.php?cd=<?php echo $exibe['cd_celular'];?>">
                    <button class="btn btn-lg btn-block btn-default">
		            <span class="glyphicon glyphicon-info-sign" style="color: cadetblue;"> Detalhes</span>	
		            </button>
                </a>
		    </div> 		
	    </div>
    <?php } ?>
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>