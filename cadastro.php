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
    <?php echo "Muito obrigado por se cadastrar $nome";?>
    </h1>
    <?php
}
?>

<h1 class="contato__title">Cadastro</h1>
<form action="./contato.php" method="post">
    <label for="txtEmail">E-mail</label>
    <input type="text" name="txtEmail" id="txtEmail">
    <label for="txtSenha">Senha</label>
    <input type="text" name="txtSenha" id="txtSenha">
    <input type="submit" value="Cadastrar">
</form>

<?php
include_once './includes/_footer.php';
?>