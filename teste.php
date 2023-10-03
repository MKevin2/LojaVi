<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/smartphone.png"> <!--color of logo: #267CF1-->
    <title>Teste</title>
</head>
<body>
    <?php
        include 'conexao.php';

        // Variável $exibe vai receber a variável $cn que receberá o resultado de uma query (consulta)
        $consulta = $cn->query('select * from vw_celular');
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
         // Variável $exibe receberá o resultado da consulta em forma de uma tabela matrix
        echo $exibe['nm_celular'] .'<br>';
        echo $exibe['vl_preco'].'<br>';
        echo $exibe['ds_marca'].'<br>';
        echo '<hr>';

        }

    ?>
</body>
</html>