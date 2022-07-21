<?php
include_once '../includes/_dados.php';

$acao =  $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao){
    case 'escluir';

$sql = "DELETE FROM produtos WHERE ProdutosID=".$id;
mysqli_query($conexao,$sql);
header('location:./produtos-lisa.php');
break;
case'salvar':
    $nome= $_POST['Nome'];
    $descricao=$_POST['descricao'];

    if(!isset($_POST['id'])  empty($_POST['id'])){
        $sql= "INSERT INTO 'Produtos'('Nome','Descricao')VALUES ('".$Nome.'",'".$descricao.'");
    }else{
        $sql= "UPDATE 'produtos' SET 'Nome'='.$Nome."','Descricao='".$descricao.'"WHERE 'ProdutosID='".$id."' " ;
    }

    mysqli_query($conexao,$sql);
  
    $sql="DELETE FROM produtos where ProdutosID=".$id;
    mysqli_query($conexao,$sql);
  header('loction: ./produtos-lista.php');
  
  break;

  case 'salvar';

  $nome=$_POST['Nome'];
  $descricao=$_POST['descricao'];

  if( !isset($_POST['id'])  empty($_POST['id'])){
      $sql= "INSERT Into 'categorias'('Nome','Descricao') VALUES ('".$nome."','".$descricao."')";
  }else{
    $sql= "UPDATE 'categorias'set'Nome'='".$nome."','Descricao'='".$descricao."'WHERE 'CatgoriasID'= '".$id."'";
  }
  mysqli_query($conexao,$sql);
  header('location: ./categoria-lista.php');
  break;
}