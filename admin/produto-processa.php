<?php
include_once '../includes/_banco.php';

$acao =  $_REQUEST['acao'];
$id = $_REQUEST['id'];

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