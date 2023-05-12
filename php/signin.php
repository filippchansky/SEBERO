<?php
    session_start();
    include 'connection.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($con, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); 

    if (mysqli_num_rows($check_user) > 0) {
        header('Location: app.php');
    }else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: signup.php');
    }
?>