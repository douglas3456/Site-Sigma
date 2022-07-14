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

foreach ($produtos as $key => $value) {
  
  ?>

    <div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./content/<?php echo $value ['imagem'];?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value  ['nome'];?></h5>
    <p class="card-text"><?php echo $value  ['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">comprar</a>
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