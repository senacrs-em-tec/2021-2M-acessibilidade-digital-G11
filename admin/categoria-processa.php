<?php
include_once '../includes/_dados.php';
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id']

switch ($acao) {
// acao de excluir dados
case "excluir"

// monta a SQL que exclui os registros
$sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

// executa o comando de excluir
mysqli_query($conexao,$sql);

// redireciona a pagina
header("location: ./categoria-lista.php");

break;

case 'salvar' :
// captura os dados
$nome = $_POST['nome'];
$descricao = $POST [' descricao'];

//upload da imagem
if($_FILES['foto' ]['size'] > 0){
// pasta que armazena o arquivo 
$uploaddir = '../imagens/categorias/';

//extrair extensão da imagem
if($_FILES['foto']['size'] > 0)
else{
    $nomearquivo = $_POST['imagem'];
}

if( !isset($_POST['id']) || empty($_POST['id'])){
    $sql = "INSERT INTO 'categorias'('Nome', 'Descricao', 'Imagem') VALUES ('".$nome>"', '".$descricao."', '".$nomearquivo."')";

}else{
    $sql = "UPDATE 'categorias' SET 'Nome'='".$nome."', 'Descricao'='".$descricao."', 'Imagem'='".$nomearquivo."' WHERE 'CategoriaID'='".$id.;
}

mysqli_query($conexao, $sql);

header('location: ./categoria-lista.php')
break;