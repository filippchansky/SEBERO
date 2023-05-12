<?php
    session_start()
?>

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
    <link rel="stylesheet" href="/css/registration_signin.css">
    <title>Document</title>
</head>
<body>
<?php
    include 'connection.php';
?>
    <div class="modal">
        <div class="modal_box">
            <h1>Регистрация</h1>
            <form action="signup_script.php" method="post" class="modal_form">
                <input type="text" name="full_name" placeholder="Введите ФИО" class="modal_form-input">
                <input type="text" name="post" placeholder="Введите должность" class="modal_form-input">
                <input type="text" name="login" class="modal_form-input" placeholder="Login">
                <input type="password" name="password" class="modal_form-input" placeholder="Password">
                <input type="password" name="confirm_password" class="modal_form-input" placeholder="Confirm_password">
                <button class="modal_form-btn">Регистрация</button>
                <button class="modal_form-btn"><a href="signup.php">Уже есть аккаунт? Войдите</a></button>
            </form>
            <?php 
                if ($_SESSION['message']){
                    echo '<p class="msg">'.$_SESSION['message'].'</p>';
                }
                 unset($_SESSION['message']);
                ?>
        </div>
    </div>
    
</body>
</html>