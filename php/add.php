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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/add.css">
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

    <div class="container_add">
        <h1>Форма для добавления</h1>
        <form class="add_form" action="create.php" method="post">
            <p>Наименование</p>
            <input class="input_title" type="text" name="Наименование">
            <p>Описание</p>
            <textarea class="input_description" type="text" name="Описание" id=""></textarea>
            <p>Цена</p>
            <input class="input_price" type="text" name="Цена" id="">
            <p>Остаток</p>
            <input class="input_balance" type="text" name="Остаток">
            <button class="btn_add_create" type="submit">Добавить</button>
        </form>
    </div>
    
</body>
</html>