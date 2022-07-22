<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';

if (isset ( $_POST['txtNome'])) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    ?>
    <h1 class="contato__message">
    <?php echo "Muito obrigado $nome, agora você está cadastrado no Soccer Boots Sigma";?>
    </h1>
    <?php
}
?>

<h1 class="contato__title">Contato</h1>
<form action="./contato.php" method="post">
    <label for="txtNome">Nome Completo</label>
    <input type="text" name="txtNome" id="txtNome">
    <label for="txtSenha">Senha</label>
    <input type="text" name="txtSenha" id="txtSenha">
    <label for="txtEmail">E-mail</label>
    <input type="text" name="txtEmail" id="txtEmail">
    <label for="txtTelefone">Telefone</label>
    <input type="text" name="txtTelefone" id="txtTelefone">
    <label for="txtMensagem">Mensagem</label>
    <input type="text" name="txtMensagem" id="txtMensagem">
    <input type="submit" value="Cadastrar">
</form>

<?php
include_once './includes/_footer.php';
?>