<?php 
include_once 'includes/_head.php';
include_once 'includes/_header.php';
include_once 'includes/_dados.php';
$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>

<main>
    <h1 class="main__title"><?php echo $produtos[$id]['nome'];?></h1>
    <div class="produto__imagem">
        <img src='./content/<?php echo $produtos[$id]['imagem'];?>'>
    </div>
    <p class="produto__text"><b>Categoria: </b><?php echo $produtos[$id]['categoria'];?></p>
    <p class="produto__text"><b>Preço: </b><?php echo $produtos[$id]['preco'];?></p>
    <p class="produto__text"><b>Descrição: </b><?php echo $produtos[$id]['descricao'];?></p>
    <div class="produto__payment"> 
        <h1><b>Forma de Pagamento</b></h1>
        <a href="pix.php"><p><img class="payment__img" src="./content/pix.png">Pix</p></a>
        <a href="cartao.php"><p><img class="payment__img" src="./content/cartao.png">Cartão</p></a>
        <a href="#"><p><img class="payment__img" src="./content/dinheiro.png">Dinheiro</p></a>
    </div>
    <div>
        <a href="index.php" class="produto__buttons">Voltar</a>
    </div>
</main>
<?php
include_once 'includes/_footer.php'
?>