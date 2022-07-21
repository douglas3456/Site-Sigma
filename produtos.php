<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';

?>
<div class="container">
 <h1>produtos</h1>
<div class="row mt-5">

<?php

$sql = "SELECT * FROM produtos WHERE Ativo = 1 ORDER BY RAND()";
$exec = mysqli_query($conn,$sql);



//Informar a quantidade de registros de dados
$numProdutos = mysqli_num_rows($exec);

//percorre todos os dados extraidos do banco
while ($dados = mysqli_fetch_assoc($exec) ) {
  
  ?>

<div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./content/<?php echo $dados ['imagem'];?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados  ['Nome'];?></h5>
    <p class="card-text"><?php echo $dados ['Descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">comprar</a>
  </div>
</div>
  

<?php
}
?>

</div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>