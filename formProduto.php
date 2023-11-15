<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TechNivek | Logon de Usuário</title>
<link rel="shortcut icon" href="img/smartphone.png">	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="jquery.mask.js"></script>

<script>
$(document).ready(function(){	
    $('#preco').mask('000.000.000.000.000,00', {reverse: true});
    $("#isbn").mask('000-00-000-0000-0');
});
</script>
	
<style>
    .navbar{
	    margin-bottom: 0;
    }
</style>

</head>

<body>
	
<?php

	session_start();

    //Se a sessão estiver vazia ou diferente de 1 (administrador), redireciona para página index
    
	if($_SESSION['Status'] =! 1) {
        header('location:index.php');
    }
	

	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

    $consultaMarca = $cn-> query("select * from tbl_marca");
    $consultaMemoria = $cn-> query("select * from tbl_memoria");
?>
	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de Celulares</h2>
				
				<form method="post" action="insprod.php" name="incluiProd" enctype="multipart/form-data">
				
                <!--<div class="form-group">
                    <label for="txtcod">Código do Celular</label>
                    <input type="number" class="form-control" name="txtcod" required id="txtcod">
                </div>

				<div class="form-group">
					<label for="txtisbn">ISBN</label>
					<input name="txtisbn" type="text" class="form-control" required id="txtisbn">
				</div> -->

                <div class="form-group">
                    <label for="txtcelular">Nome do Celular</label>
                    <input name="txtcelular" type="text" class="form-control" required id="txtcelular">
                </div>
					
                <div class="form-group">					
					<label for="sltcat">Marca</label>
					
				    <select class="form-control" name="sltcat">
					    <option value="">Selecione</option>
                        <?php  while($listaMarca = $consultaMarca-> fetch(PDO::FETCH_ASSOC)) { ?>
					    <option value="<?php echo $listaMarca['cd_marca']?>"><?php echo $listaMarca['ds_marca']?></option>					
                        <?php } ?>
                    </select>
				</div>
					
				<div class="form-group">
					<label for="sltautor">Memória</label>

					<select class="form-control" name="sltmemoria">
					    <option value="">Selecione</option>
					    <?php  while($listaMemoria = $consultaMemoria-> fetch(PDO::FETCH_ASSOC)) { ?>
					    <option value="<?php echo $listaMemoria['cd_memoria']?>"><?php echo $listaMemoria['ds_memoria']?></option>					
                        <?php } ?>
					</select>
				</div>					
					
				<div class="form-group">
				    <label for="txtpreco">Preço</label>
				    <input type="text" class="form-control"  name="txtpreco"  required id="txtpreco">
				</div>
					
					
				<div class="form-group">
					<label for="txtqtde">Quantidade em Estoque</label>
					<input type="number" class="form-control" name="txtqtde" required id="txtqtde">
				</div>
					
					
				<div class="form-group">
					<label for="txtresumo">Descrição do Produto</label>
					<textarea rows="5" class="form-control" name="txtresumo"></textarea>
				</div>					
	
				<div class="form-group">
				    <label for="txtfoto1">Foto Principal</label>
					<input type="file" accept="image/*" class="form-control" name="txtfoto1" required id="txtfoto1">
				</div>
					
				<div class="form-group">
					<label for="sltlanc">Lançamento?</label>
					
					<select class="form-control" name="sltlanc">
					    <option value="">Selecione</option>
					    <option value="S">Sim</option>
					    <option value="N">Não</option>					  
					</select>
				</div>
					
							
				<button type="submit" class="btn btn-lg btn-default">
					<span class="glyphicon glyphicon-pencil"> Cadastrar </span>
				</button>
				
				</form>
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
</body>
</html>