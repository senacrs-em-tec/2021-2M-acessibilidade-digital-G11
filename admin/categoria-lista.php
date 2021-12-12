<?php
// conexao com o banco de dados
include_once '../includes/_dados.php';
// include do arquivo de head
include_once '../includes/_head.php';
// SQL de consulta
$sql = "SELECT * FROM categorias";
//executa a consulta de dados (variavel de conexao de dados, varialvl sql de consulta)
$resultado = mysqli_query ($conexao, $sql);
// conta quantos registros existem 
$total = mysqli_num_row ($resultado);
// inclui o menu na pagina
include 'navbar.php';
?>
    <main>
        <h2>Administração das Categorias</h2>
        <a href="categoria-salvar.php">Inserir</a>
        <hr>
        <table border="1">
           <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>Ações</th>
           </tr>
           <?php
           // verefica se existe informações no banco de dados
           if($resultado){
            //converte os resultados em uma linha de matriz
            while ($dado + mysqli_fetch_array($resultado)) {
           ?>
           <tr>
               <td><?php echo $dado['CategoriaID'];?></td>
               <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></a></td>
               <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
           </tr>
           <?php                        
                }
           }else{
            ?>
            <tr>
                 <td colspan="3">Resultados não encontrados</td>
            </tr>
            <?php
           }
           ?>
                <tr>
                     <td colspan="3">Total de Registros: <?php echo $total;?></td>
                </tr>
            </table>

        </main>
    <?php
    // incluso do arquivo do radape
    include_once '_footer.php';
    ?>
           