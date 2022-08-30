<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';


$id = $_GET ['id'];
$tipo = $_GET['tipo'];

$sql = "SELECT * FROM produtos WHERE ProdutoID = ".$id;
$resultado = mysqli_query($conn,$sql);
$dados= mysqli_fetch_array($resultado,MYSQLI_ASSOC);  
?>
<div class="container mt-5">
    <div class= "row">
        <div class="col">
<h1><?php echo $dados['Nome'] ;?></h1>
<img src="./content/<?php echo $dados[$id]['imagem'];?>">
<h1><?php echo $dados[$id]['preco'] ;?></h1>
<p>descrição <?php echo $dados[$id]['Descricao'] ;?></p>
</div>
</div>

<div class="row">
    <div class="col">voltar</div>
    <div class="col">comprar</div>
</div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>