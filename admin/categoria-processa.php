<?php
include_once '../includes/_banco.php';

$acao =  $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao){
    case 'escluir';

$sql = "DELETE FROM categorias WHERE CategoriaID=".$id;
mysqli_query($conn,$sql);
header('location:./categoria-lista.php');
break;
case'salvar':
    $nome= $_POST['nome'];
    $descricao=$_POST['descricao'];

    if($_FILES['foto']['size'] > 0){
        $uploaddir='./content/';
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
         $nomearquivo= 'categoria-'.$id.'-'.rand().'-'.$extensao;
        $uploadfile = $umploaddir . $nomearquivo;
         move_uploaded_file($_FILES['foto']['tap_name'],$uploadfile);
    }else{
        $nomearquivo = $_poat['imagem'];
        }
        if ( isset($_GET['id'])  || empty($_GET['id']))
        $sql= "INSERT INTO `categorias`(`Nome`, `Descricao`,`Imagem`) VALUES ('".$nome.'",'".$descricao.'",'".$nomearquivo."')";
        
      }else{
        $sql = "UPDATE 'categorias' SET `Nome`='".$nome.'",`Descricao`='".$descricao.'", `Imagem`='".$nomearquivo."' WHERE `CategoriaID`='".$id."' ";
    mysqli_query($conn,$sql);
  
    $sql="DELETE FROM categorias where CategoriaID=".$id;
    mysqli_query($conn,$sql);
  header('loction: ./categoria-lista.php');
  
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