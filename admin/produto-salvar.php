<?php
include_once '../includes/_dados.php';
include_once '_head.php';

if ( isset($_GET['i'])   empty($_GET['id'])){
 
$id= $_GET['id'];
$sql = "SELECT * FROM produtos WHERE ProdutosID = ".$id;
$resultado = mysqli_query($conexao,$sql);
$dados= mysqli_fetch_array($resultado,MySQLI_ASSOC);    
}else{
    $id='';
    $dados['Nome'] = '';
    $dados['Descricao']='';

}
include_once '_menu.php';
?>
<main>
    <h2>administração dos Produtos</h2>
    <a href="produtos-lista.php">Listagem</a>
    <hr>
    <form action="produtos-processa.php"method="post">
     <input type="text" value="salvar" name="acao">   
     <input type="text"  name="id" value="<?php echo $id;?>"><br>
     <label for= "nome">Nome:</label><br>   
     <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
     <label for= "descricao">Descrição:</label><br>   
     <textarea  id="descricao" name="descicao"><?php echo $dados['Descricao'];?></textarea><br>
     <hr>

     <input type="submit" value="Enviar">
</form>

</main>

<?php
include_once '_footer.php