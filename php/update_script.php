<?php

require_once 'connection.php';

$id = $_POST['id'];
$title = $_POST['Наименование'];
$description = $_POST['Описание'];
$price = $_POST['Цена'];
$remainder = $_POST['Остаток'];


 
mysqli_query($con, "UPDATE `tobacco` SET `Наименование` = '$title', `Описание` = '$description', `Цена` = '$price', `Остаток` = '$remainder' WHERE `tobacco`.`Id` = '$id'");

header('location: app.php');