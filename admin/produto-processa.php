<?php
include_once '../includes/_banco.php';

$acao =  $_REQUEST['acao'];
$id = $_REQUEST['id'];

if($_Files['foto']['size']>0 ){

    $uploaddir='../imagens/produtos/';
    $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
    $nomearquivo = 'categoria-'.$id.'-'rand().'.'.$extensao;
    $uploadfile = $uploaddir . $nomearquivo;
    
    move_uploaded_files($_FILES['foto']['tmp_name'], $uploadfile);

}else{
    $nomearquivo = $_POST ['imagem'];
}

switch ($acao){
    case 'excluir';
        $sql = "DELETE FROM produtos WHERE ProdutoID=".$id;
        mysqli_query($conn,$sql);
        header('location:./produto-lista.php');
    break;
      
    case'salvar':
      $nome = $_POST['nome'];
      $descricao = $_POST['descricao'];
      if ( isset($_GET['id'])  || empty($_GET['id'])){
          $sql= "INSERT INTO `produtos`(`Nome`, `Descricao`) VALUES ('".$nome."','".$descricao."')";
      }else{
          $sql = "UPDATE 'produtos' SET `Nome`='".$nome."', `Descricao`='".$descricao."' WHERE `ProdutoID` = ".$id;
      }
      mysqli_query($conn,$sql); 
      header('location: ./produto-lista.php');
  break;

  
}