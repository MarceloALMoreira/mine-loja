<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mine Loja</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">DB Soluções</div>
        <div class="cart">
            <i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>

    <!-- Body -->
    <div class="container">

        <div class="products">
            <form action="filtro/criar.php" method="post">
                <div class="body-product">
                    <div class="img-product">
                        <img src="assets/img/product-burger-1.png" alt="product 1" class="product-mini" />
                    </div>

                    <div class="title">
                        <p>Hambuger</p>
                        <h2>R$ 497</h2>
                        <input type="hidden" name="id_product" value="">
                        <input type="hidden" name="valor" value="">
                        <button class="button">Adicionar</button>
                    </div>
                </div>
            </form>

            <form action="filtro/criar.php" method="post">
                <div class="body-product">
                    <div class="img-product">
                        <img src="assets/img/product-burger-1.png" alt="product 1" class="product-mini" />
                    </div>

                    <div class="title">
                        <p>Hambuger</p>
                        <h2>R$ 497</h2>
                        <input type="hidden" name="id_product" value="">
                        <input type="hidden" name="valor" value="">
                        <button class="button">Adicionar</button>
                    </div>
                </div>
            </form>

            <form action="filtro/criar.php" method="post">
                <div class="body-product">
                    <div class="img-product">
                        <img src="assets/img/product-burger-1.png" alt="product 1" class="product-mini" />
                    </div>

                    <div class="title">
                        <p>Hambuger</p>
                        <h2>R$ 497</h2>
                        <input type="hidden" name="id_product" value="">
                        <input type="hidden" name="valor" value="">
                        <button class="button">Adicionar</button>
                    </div>
                </div>
            </form>

            <form action="filtro/criar.php" method="post">
                <div class="body-product">
                    <div class="img-product">
                        <img src="assets/img/product-burger-1.png" alt="product 1" class="product-mini" />
                    </div>

                    <div class="title">
                        <p>Hambuger</p>
                        <h2>R$ 497</h2>
                        <input type="hidden" name="id_product" value="">
                        <input type="hidden" name="valor" value="">
                        <button class="button">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Sidbar -->
        <div class="sidbar">

            <div class="top-cart">
                <p>Meu Carrinho</p>
            </div>

            <!-- Product Home -->
            <div class="item-cart">
                <div class="img-row">
                    <img src="assets/img/product-burger-1.png" alt="" class="img-cart">
                </div>
                <p>Hambuger</p>
                <h2>R$ 497</h2>

                <form action="filtro/excluir.php" method="post">
                    <input type="hidden" name="id_product" value="">
                    <button type="submit" style="border: none; background: none;">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </form>
            </div>

            <!-- Product Finish -->

            <div class="item-cart-vazio">Seu carrinho esta vazio</div>


            <!-- Footer -->
            <div class="footer">
                <h3>Total</h3>
                <h2>R$ 497</h2>
            </div>
        </div>

    </div>


</body>

</html>