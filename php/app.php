<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body>
<?php
    include 'connection.php';
?>

    <div class="header_container">
        <header class="header">
            <div class="logo">
                <button>
                    <img class="img_logo" src="/img/f70qLGcGFPw.svg" alt="">
                </button>

            </div>
            
            <div class="nav">
            <button  class="btn_nav btn_product"><a class="link_nav" href="/php/app.php">Главная</a></button>

            <button class="btn_nav btn_add"><a class="link_nav" href="/php/add.php">Добавить</a></button>

            <button class="btn_nav btn_sale"><a class="link_nav" href="/php/sale.php">Реализация</a></button>
            </div>
        </header>
    </div>

    <!-- ОКНО РЕГИСТРАЦИИ -->

    <!-- <div class="modal">
        <div class="modal_box">
            <h1>Авторизация</h1>
            <form action="" class="modal_form">
                <input type="text" class="modal_form-input" placeholder="Login">
                <input type="text" class="modal_form-input" placeholder="Password">
                <button class="modal_form-btn">Войти</button>
            </form>
        </div>
    </div> -->
    
    <!-- ------------------ -->

    <main class="main">
        <h1 class="table_logo" id="table_logo">Табачные изделия</h1>
            <div class="container_table_tobacco">    
                <table class="table_tobacco" id="table_tobacco">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Остаток</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $products = mysqli_query($con, "SELECT * FROM `tobacco`");
                                $products = mysqli_fetch_all($products);
                                foreach ($products as $product) {
                                    ?>
                                    <tr>
                                        <td><?= $product[1]?></td>
                                        <td><?= $product[2]?></td>
                                        <td><?= $product[3]?></td>
                                        <td><?= $product[4]?></td>
                                        <td><a class="update-Btn" href="update.php?id=<?= $product[0]?>">Изменить</a></td>
                                    </tr>

                                    <?php

                                }
                                ?>
                    </tbody>
                </table>
            </div>

    </main>

<script src="../index.js"></script>

</body>
</html>







