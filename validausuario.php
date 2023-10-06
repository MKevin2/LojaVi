<?php
include 'conexao.php';

session_start(); //Iniciando uma sessão
$Vemail = $_POST ['txtemail'];
$Vsenha = $_POST ['txtsenha'];

//echo $Vemail.'<br>';
//echo $Vsenha.'<br>';

$consulta = $cn->query("select cd_usuario,nm_usuario,ds_email,ds_senha,ds_status from tbl_usuario where ds_email = '$Vemail' and ds_senha = '$Vsenha'");
if($consulta->rowCount() == 1) {
    //echo 'Usuário está cadastrado';
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    
    if($exibeUsuario['ds_status'] == 0 ) {
        $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['STATUS']=0;
        header('location:index.php');
    }
    else{
        $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['STATUS']=1;
        header('location:index.php');
    }
}
    else{
        //echo 'Usuário não cadastrado';
        header('location:erro.php');
    }
?>