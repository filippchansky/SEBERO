<?php

require_once 'connection.php';

$title = $_POST['Наименование'];
$description = $_POST['Описание'];
$price = $_POST['Цена'];
$remainder = $_POST['Остаток'];
 
mysqli_query($con, "INSERT INTO `tobacco` (`Id`, `Наименование`, `Описание`, `Цена`, `Остаток`) VALUES (NULL, '$title', '$description', '$price', '$remainder')");

header('location: app.php');
?>