<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/add.css">
    <link rel="stylesheet" href="/css/sale.css">
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

    <div class="contanier__btn-add">
        <button type="button" id="btn-sale">Реализация</button>
        <button type="button" class="btn-back" id="btn-back" ><a href="/php/sale.php">Назад</a></button>
        <button type="button" id="btn-up">Поступление</button>
    </div>

    <div class="container_add-sale">
        <!-------------------- РЕАЛИЗАЦИЯ -------------------->

        <div>
        <h1 class="opacity0" id="add_title-sale">Реализация</h1>
        <form class="add_form opacity0" id="add_form-sale" action="script_sale.php" method="post">
        <p>Наименование</p><h4>
            <select class="input_title select__name" type="text" name="id_tobacco" id="">
                <?php
                    $res = mysqli_query($con, "SELECT `id`, `Наименование` FROM `tobacco`");
                    $res = mysqli_fetch_all($res);
                    foreach ($res as $row) {
                        ?>
                        <option type ="text" value=<?=$row[0]?>><?=$row[0]?>. <?=$row[1]?></option>

                        <?php
                        
                    }
                ?>
            </select>    
            <p>Номер договора</p>
            <input class="input_title" type="text" name="Номер">
            <p>Отвественное лицо</p>
            <select class="input_title" type="text" name="Отвественное" id="">
                <?php
                    $res = mysqli_query($con, "SELECT `full_name`, `id` FROM `users`");
                    $res = mysqli_fetch_all($res);
                    foreach ($res as $row) {
                        ?>
                        <option type ="text" value=<?=$row[0]?>><?=$row[0]?></option>
                        <?php
                            
                    }
                ?>
            </select>
            <p>Количество</p>
            <input class="input_balance" type="text" name="Количество">
            <p>Клиент</p>
            <input class="input_title" type="text" name="Клиент">
            <p>Стоимость</p>
            <input class="input_balance" type="text" name="Общая">
            <p>Дата</p>
            <input class="input_balance" type="text" name="Дата">
            <button class="btn_add_create" type="submit">Добавить</button>
        </form>
        </div>

        <!---------------- ПОСТУПЛЕНИЕ ---------------->

        <div>
            <h1 class="opacity0" id="add_title-up">Поступление</h1>
            <form class="add_form opacity0" id="add_form-up"  action="script_sale-add.php" method="post">
            <p>Наименование</p><h4>
                <select class="input_title select__name" type="text" name="id_tobacco" id="">
                    <?php
                        $res = mysqli_query($con, "SELECT `id`, `Наименование` FROM `tobacco`");
                        $res = mysqli_fetch_all($res);
                        foreach ($res as $row) {
                            ?>
                            <option type ="text" value=<?=$row[0]?>><?=$row[0]?>. <?=$row[1]?></option>

                            <?php
                            
                        }
                    ?>
                </select>    
                <p>Номер договора</p>
                <input class="input_title" type="text" name="Номер">
                <p>Отвественное лицо</p>
                <select class="input_title" type="text" name="Отвественное" id="">
                    <?php
                        $res = mysqli_query($con, "SELECT `full_name`, `id` FROM `users`");
                        $res = mysqli_fetch_all($res);
                        foreach ($res as $row) {
                            ?>
                            <option type ="text" value=<?=$row[0]?>><?=$row[0]?></option>
                            <?php
                                
                        }
                    ?>
                </select>
                <p>Количество</p>
                <input class="input_balance" type="text" name="Количество">
                <p>Дата</p>
                <input class="input_balance" type="text" name="Дата">
                <button class="btn_add_create" type="submit">Добавить</button>
            </form>
        </div>
    </div>
                    
        <!-- ------------------ -----ТАБЛИЦА РЕАЛИЗАЦИЯ----------------------------------->

    <main class="main opacity0" id="main_table-sale">
        <h1 class="table_logo-sale" id="table_logo">Реализация</h1>
            <div class="container_table_tobacco">    
                <table class="table_tobacco" id="table_tobacco">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Номер договора</th>
                            <th>Отвественное лицо</th>
                            <th>Количество</th>
                            <th>Клиент</th>
                            <th>Общая стоимость</th>
                            <th>Дата</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $products = mysqli_query($con, "SELECT * FROM `sale`");
                                $products = mysqli_fetch_all($products);
                                foreach ($products as $product) {
                                    ?>
                                    <tr>
                                        <td><?= $product[1]?></td>
                                        <td><?= $product[2]?></td>
                                        <td><?= $product[3]?></td>
                                        <td><?= $product[4]?></td>
                                        <td><?= $product[5]?></td>
                                        <td><?= $product[6]?></td>
                                        <td><?= $product[7]?></td>
                                        <td><a class="update-Btn" href="update.php?id=<?= $product[0]?>">Изменить</a></td>
                                    </tr>

                                    <?php

                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </main>
    

        <!-- ------------------ -----ТАБЛИЦА ПОСТУПЛЕНИЯ----------------------------------->

    <main class="main opacity0" id="main_table-up">
        <h1 class="table_logo" id="table_logo-add">Поступление</h1>
            <div class="container_table_tobacco">    
                <table class="table_tobacco" id="table_tobacco-add">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Номер договора</th>
                            <th>Отвественное лицо</th>
                            <th>Количество</th>
                            <th>Дата</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $products = mysqli_query($con, "SELECT * FROM `sale-add`");
                                $products = mysqli_fetch_all($products);
                                foreach ($products as $product) {
                                    ?>
                                    <tr>
                                        <td><?= $product[1]?></td>
                                        <td><?= $product[2]?></td>
                                        <td><?= $product[3]?></td>
                                        <td><?= $product[4]?></td>
                                        <td><?= $product[5]?></td>
                                        <td><a class="update-Btn" href="update.php?id=<?= $product[0]?>">Изменить</a></td>
                                    </tr>

                                    <?php

                                }
                                ?>
                    </tbody>
                </table>
            </div>

    </main>

<script src="../script_realize.js"></script>

    
</body>
</html>