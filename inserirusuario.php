<?php
include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$end = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

//Testes
/*
echo $nome.'<br>';
echo $email.'<br>';
echo $senha.'<br>';
echo $end.'<br>';
echo $cidade.'<br>';
echo $cep.'<br>'; 
*/

$consulta = $cn->query("select ds_email from tbl_usuario where ds_email= '$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if ($consulta->rowCount() == 1){
    echo 'Email já cadastrado!';
}
else{
    echo 'Usuário pode ser cadastrado!';
}
?>