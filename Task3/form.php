<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизації</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login" value="Admin"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="password"></td>
        </tr>
        <tr>
            <td><button name="send">Вхід</button></td>
            <td><button name="reset">Вихід</button></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['login']) && isset($_POST['password'])){
    if(isset($_POST['send'])){
        if($_POST['login'] === 'Admin' && $_POST['password'] === 'password'){
            echo 'Добрий день, Admin!';
            if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
            }
        }
        else
            echo 'Невірність введення логіна або пароля';
    }
    if(isset($_POST['reset'])){
        session_destroy();
        echo 'Ви вийшли!';
    }
}
?>
</body>
</html>
