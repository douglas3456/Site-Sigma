<?php
include_once '../includes/_banco.php';
include_once './_header.php';
$sql = 'SELECT * FROM categorias';
$resultado = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($resultado);
include_once './_menu.php';
?>
<main>
    <h2>Administração das Categor</h2>
    <a href="categorias-salvar.php">Inserir</a>
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
      <td><?php echo $dado ['CategoriaID'];?> </td>
      <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></td>
      <td><a href="categoria-processa.php?acao=escluir&id=<?php echo $dado['CategoriaID'];?>">Escluir</a></td>
        </tr>
    <?php
        }
        if($resultado){
         while($dados = mysqli_fetch_array($resultado)){
         ?>
         <tr>
        <td><?php echo $dado ['CategoriaID'];?></td> 
        <td> <a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></td>
        </tr>
    </main>

<?php
include_once './_footer.php';
?>