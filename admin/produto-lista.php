<?php
include_once '../includes/_banco.php';
include_once './_header.php';
$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($resultado);
include_once './_menu.php';
?>
<main>
    <h2>Administração das Categor</h2>
    <a href="produto-salvar.php">Inserir</a>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
       <?php
       if ($resultado){
        While ($dado = mysqli_fetch_array($resultado)){
        ?>
        <tr>
      <td><?php echo $dado ['ProdutoID'];?> </td>
      <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Nome'];?></td>
      <td><a href="categoria-processa.php?acao=escluir&id=<?php echo $dado['ProdutoID'];?>">Escluir</a></td>
        </tr>
    <?php
        }
        if($resultado){
         while($dados = mysqli_fetch_array($resultado)){
         ?>
         <tr>
        <td><?php echo $dado ['ProdutoID'];?></td> 
        <td> <a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Nome'];?></td>
        <td> <a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['ProdutoID'];?>">Excluir</a></td>
    </tr>
    <?php
         }
        }else{
            ?>
            <tr>
                <td colspan="3">Resultado não encontrados</td>
            </tr>
            <?php
             }
            ?>
            <tr>

            <td colspan="3">Total de Registros:<?php echo $total;?></td>
            </tr>
            </table>
    </main>
<?php
include_once '_footer.php';
?>