
<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<form action="cartao.php" method="post">
    <ul>
        <label for="txtNumero">Número do Cartão: </label>
        <input type="text" name="txtNumero" id="txtNumero">
        <label for="txtVencimento">Vencimento: </label>
        <input type="text" name="txtVencimento" id="txtVencimento">
        <label for="txtCodigo">Código de Segurança: </label>
        <input type="text" name="txtCodigo" id="txtCodigo">
        <label for="txtNomeTitular">Nome do titular: </label>
        <input type="text" name="txtNomeTitular" id="txtNomeTitular">
        <label for="txtVencimento">CPF do titular: </label>
        <input type="text" name="txtCPF" id="txtCPF">
        <label for="txtVencimento">Data de nascimento: </label>
        <input type="text" name="txtData" id="txtData">
        <br>
        <input type="submit" value="Cadastrar Cartão">
    </ul>
</form>

<?php

if (isset ( $_POST['txtNumero']) ) {;
    echo '<h5>Cartão cadastrado com sucesso!</h5>', '<h5>Em breve você receberá atualizações do seu pedido através do e-mail.</h5>';
}
?>

<?php
include_once './includes/_footer.php';
?>
