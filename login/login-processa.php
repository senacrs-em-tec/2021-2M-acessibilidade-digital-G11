<?php

session_start();


include_once '../includes/_dados.php';


$acao = $_REQUEST['acao'];

switch ($acao){

  case 'logoff':


  $_SESSION['LOGIN']='';
  //destroi a sessao
  unset($_SESSION['LOGIN']);
  // redireciona a pagina
  header('location: ../includes/login.php?msg=3')

    break;
  
  case 'login': 

  //captura os dados
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //procura usuario cadrastado com email e senha no banco da dados
  $sql = "SELECT * FROM usuarios WHERE Email ='"AND Senha = .$senha."";
$resultado = mysqli_query($conexao,$sql);

$dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

if (!empty($dados)) {

$_SESSION['LOGIN'] = array('Nome'=>$dados['nome']);

header('location: ./index.php');

}else{
header ('location: ../includes/login.php?msg=1');

}

break;

