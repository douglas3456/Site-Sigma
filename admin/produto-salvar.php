<?php
include_once '../includes/_banco.php';
include_once '../includes/_head.php';

if ( isset($_GET['id'])  || empty($_GET['id'])){
 
$id = $_GET['id'];
$sql = "SELECT * FROM produto WHERE ProdutoID = ".$id;
$resultado = mysqli_query($conn,$sql);
$dados= mysqli_fetch_array($resultado,MYSQLI_ASSOC);    
}else{
    $id='';
    $dados['Nome'] = '';
    $dados['Descricao']='';

}
include_once '_menu.php';
?>
<main>
    <h2>administração das categorias</h2>
    <a href="produto-lista.php">Listagem</a>
    <hr>
    <form action="produto-processa.php"method="post" enctype="multipart/form-data">
     <input type="text" value="salvar" name="acao">   
     <input type="text"  name="id" value="<?php echo $id;?>"><br>
     <label for= "nome">Nome:</label><br>   
     <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
     <label for= "descricao">Descrição:</label><br>   
     <textarea  id="descricao" name="descicao"><?php echo $dados['Descricao'];?></textarea><br>
     <label for="imagem">Imagem:</label><br>
<?php
if(!empty($dados['../content']) ) {
?>
<img src="../content<?php echo $dados['imagem'];?>" width="150"/><br>
<input type="submit" value="Enviar">
<?php
}
?>
<input type="file" name="foto">
     
     <hr>

     <input type="submit" value="Enviar">
</form>

</main>

<?php
include_once '_footer.php';
?>


