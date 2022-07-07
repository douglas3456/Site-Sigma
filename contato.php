<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

if ( isset( $_POST['txtNome'] ) ) {
    $nome = strtoupper($_POST['txtNome'] );
    $nome = $_POST ['txtNome'];
    echo $nome.'<br> ';
    
}
if ( isset( $_POST['e-mail'] ) ) {
    $email = strtoupper($_POST['e-mail'] );
   

$email = $_POST ['e-mail'];
echo $email.'<br> ';
}

if ( isset( $_POST['telefone'] ) ) {
    $telefone = strtoupper($_POST['telefone'] );
   

$nome = $_POST ['telefone'];
echo $telefone.'<br> ';
}

if ( isset( $_POST['mensagem'] ) ) {
    $mensagem = strtoupper($_POST['mensagem'] );
   

$nome = $_POST ['mensagem'];
echo $mensagem.'<br> ';
}
?>



<h1>Contato</h1>

<form action="./contato.php" method="post">

<ul>
<li>
    
<label for="txtNome">Nome Completo</label>
<input type="text" name="txtNome" id="txtNome" >
</li>
<li>
    
<label for="e-mail">e-mail</label>
<input type="text" name="e-mail" id="e-mail">

</li>
<li><label for="telefone">telefone</label>
<input type="text" name="telefone" id="telefone" >

</li>
<li>
<label for="mensagem">mensagem</label>
    <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
   
</li>
<li>
    
    <input type="submit" value="cadastrar">
    </li>
</ul>

</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>