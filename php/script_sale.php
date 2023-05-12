<?php
require_once 'connection.php';

$id_tobacco = $_POST['id_tobacco'];
$num = $_POST['Номер'];
$respoPerson = $_POST['Отвественное'];
// $titleSale = $_POST['Наименование'];
$amount = $_POST['Количество'];
$client = $_POST['Клиент'];
$price = $_POST['Общая'];
$date = $_POST['Дата'];

mysqli_query($con, "INSERT INTO `sale` (`id`, `id_tobacco`, `Номер договора`, `Отвественное лицо`,  `Количество`, `Клиент`, `Общая стоимость`, `Дата`) VALUES (NULL, '$id_tobacco', '$num', '$respoPerson', '$amount', '$client', '$price', '$date')");

mysqli_query($con, "UPDATE `tobacco` SET `Остаток` =  `Остаток` - '$amount' WHERE `id` = $id_tobacco");

header('location: sale.php');
?>

