<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TechNivek | Lançamentos</title>
    <link rel="shortcut icon" href="img/smartphone.png"> <!--color of logo: #267CF1-->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
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
  include 'conexao.php';
  include 'nav.php';
  include 'cabecalho.html';

  // Variável $exibe vai receber a variável $cn que receberá o resultado de uma query (consulta)
  $consulta = $cn->query('select nm_celular, vl_preco, qt_estoque, ds_foto, cd_celular from vw_celular where sg_lancamento = "S"');
  ?>
  
  <div class="container-fluid">
	<div class="row">
	<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
		<div class="col-sm-3">
			<img src="img/<?php echo $exibe['ds_foto']; ?>" class="img-responsive" style="width: 100%">
			<div><h4><b><?php echo mb_strimwidth ($exibe['nm_celular'],0,30,'...') ?></b></h4></div>
			<div><h5>R$ <?php echo number_format ($exibe['vl_preco'],2,',','.') ?></h5></div>


      <div class="text-center">
          <a href="detalhes.php?cd=<?php echo $exibe['cd_celular'];?>">
            <button class="btn btn-lg btn-block btn-info">
              <span class="glyphicon glyphicon-circle-arrow-up"> Detalhes</span>
            </button>
          </a>
        </div>

        <div class="text-center" style="margin-top:5px; margin-bottom:45px;">
          <?php if ($exibe['qt_estoque'] > 0) { ?>
          <button class="btn btn-lg btn-block btn-primary">
            <span class="glyphicon glyphicon-usd"> Comprar</span>
          </button>

          <?php } else { ?>
          <button class="btn btn-lg btn-block btn-danger" disabled>
            <span class="glyphicon glyphicon-remove"> Indisponível</span>
          </button>

          <?php } ?>
        </div>
		</div>
	<?php } ?>	
	</div>
  </div>
  <br>
  <br>
  <br>
  <?php
  include 'rodape.html';
  ?>
  
</body>
</html>