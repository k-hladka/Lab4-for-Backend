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
    <title>Ваші данні:</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST'):?>
<table>
    <tr>
        <td>Логін:</td>
        <td> <?= $_SESSION['login'] = $_POST['login']?></td>
    </tr>
    <tr>
        <td>Пароль:</td>
        <td><?php if($_POST['password'] === $_POST['password2']){
                echo "паролі співпадають";
    }
            else{
                $strLength1 = strlen($_POST['password']);
                $strLength2 = strlen($_POST['password2']);
                if($strLength1 != $strLength2)
                echo "не співпадає(перший - {$strLength1} символів, другий - {$strLength2} символів)";
                else
                    echo "паролі не співпадають";
            }
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['password2'] = $_POST['password2'];
                ?></td>
    </tr>
    <tr>
        <td>Стать:</td>
        <td><?php if(isset($_POST['mf'])){
            $_SESSION['mf'] = $_POST['mf'];
            echo $_POST['mf'];
        }?></td>
    </tr>
    <tr>
        <td>Місто:</td>
        <td><?= $_SESSION['city'] = $_POST['city']?></td>
    </tr>
    <tr>
        <td>Улюблені ігри: </td>
        <td>
            <?php
            if(isset($_POST['games'])) {
                $_SESSION['games'] = $_POST['games'];
                foreach ($_POST['games'] as $value)
                    echo "$value<br>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Про себе:</td>
        <td><?php
            if(isset($_POST['bio'])) {
                $_SESSION['bio'] = $_POST['bio'];
                echo nl2br($_POST['bio']);
            }
            ?></td>
    </tr>
    <tr>
        <td>Фотографія</td>
        <td><?php
            if($_FILES['photo']) {
                if(preg_match('/\w+\/.(jpe?g)?(png)?/', $_FILES['photo']['type'])){
                    if(!is_dir('photo/'))
                    mkdir('photo/');
                    $path = 'photo/'. $_FILES['photo']['name'];
                    move_uploaded_file($_FILES['photo']['tmp_name'], $path);
                    echo "<img src='$path'>";
                }
            }
            ?></td>
    </tr>
</table>
    <a href="index.php">Повернутися на головну сторінку</a>
<?php endif;?>
</body>
</html>
