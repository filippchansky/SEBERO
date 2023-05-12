
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
$product_id = $_GET['id'];
$product = mysqli_query($con, "SELECT * FROM `tobacco` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
// print_r($product);
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
        <h1>Изменить</h1>
        <form class="add_form" action="update_script.php" method="post">
            <input type="hidden" value="<?=$product_id?>" name="id">
            <p>Наименование</p>
            <input class="input_title" type="text" value="<?=$product['Наименование']?>" name="Наименование">
            <p>Описание</p>
            <textarea class="input_description" type="text" name="Описание" id=""><?=$product['Описание']?></textarea>
            <p>Цена</p>
            <input class="input_price" type="text" name="Цена" value="<?=$product['Цена']?>" id="">
            <p>Остаток</p>
            <input class="input_balance" type="text" value="<?=$product['Остаток']?>" name="Остаток">
            <button class="btn_add_create" type="submit">Изменить</button>
        </form>
    </div>
    
</body>
</html>