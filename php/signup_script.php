<?php
    session_start();
    include 'connection.php';
    $full_name = $_POST['full_name'];
    $post = $_POST['post'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['confirm_password'];
    
    if ($password === $password_confirm && $full_name !== '' && $post !== '' && $login !== '' && $password !== '') {
        // connection
        $password = md5($password);
        mysqli_query($con, "INSERT INTO `users` (`Id`, `full_name`, `post`, `login`, `password`) VALUES (NULL, '$full_name', '$post', '$login', '$password')");
        header('location: signup.php');
    } else {
        $_SESSION['message'] = 'Не верно введены данные';
        header('Location: registration.php');
    }

?>