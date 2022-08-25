<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';


$id = $_GET ['id'];
$tipo = $_GET['tipo'];
?>
<div class="container mt-5">
    <div class= "row">
        <div class="col">
<h1><?php echo $produtos[$id]['nome'] ;?></h1>
<img src="./content/<?php echo $produtos[$id]['imagem'];?>">
<h1><?php echo $produtos[$id]['preco'] ;?></h1>
<p>descrição <?php echo $produtos[$id]['descricao'] ;?></p>
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