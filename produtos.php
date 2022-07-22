<?php 
include_once 'includes/_head.php';
include_once 'includes/_header.php';
include_once 'includes/_dados.php';
?>

<main>
    <h1 class="main__title">Produtos</h1>
    <div class="main__cards">
    <?php
            for($i = 0; $i < 9; $i++){
                ?>
                <div class="card">
                    <img src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Chuteira" class="card__image">
                    <h1 class="card__title"><?php echo $produtos[$i]['nome']; ?></h1>
                    <h2 class="card__description"><?php echo $produtos[$i]['descricao']; ?></h2>
                    <p class="card__price"><?php echo $produtos[$i]['preco']; ?></p>
                    <div class="card__button">
                        <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao">Comprar</a>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</main>

<?php
include_once 'includes/_footer.php'
?>