<?php
include_once '../includes/_banco.php';
include_once './_header.php';
$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conn,$sql);
$total = mysqli_num_rows($resultado);
include_once './_menu.php';
?>