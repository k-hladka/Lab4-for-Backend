<?php
session_start();
include_once("checkedSession.inc.php");
include_once("checkedCity.inc.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="style/styleListForFlagCountry.css">
</head>
<body>
<form action="">
<ul>
    <li><a href="index.php?lang=ukr"><span></span></a></li>
    <li><a href="index.php?lang=pol"><span></span></a></li>
    <li><a href="index.php?lang=usa"><span></span></a></li>
    <li><a href="index.php?lang=germ"><span></span></a></li>
    <li><a href="index.php?lang=fran"><span></span></a></li>
    <li><a href="index.php?lang=belor"><span></span></a></li>
</ul>
</form>
<form action="ShowInfoWithForm.php" enctype="multipart/form-data" method="post">
    <table>
        <tr>
            <td>Логін:</td>
            <td><input type="text" name="login" required value="<?php checked('login'); ?>"></td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td><input type="password" name="password" required value="<?php checked('password');?>"></td>
        </tr>
        <tr>
            <td>Пароль(ще раз):</td>
            <td><input type="password" name="password2" required value="<?php checked('password2');?>"></td>
        </tr>
        <tr>
            <td>Стать:</td>
            <td>
                <label><input type="radio" name="mf" value="чоловік" <?php checked('mf', 1, 'checked');?>>чоловік</label>
                <label><input type="radio" name="mf" value="жінка" <?php checked('mf', 1, 'checked');?>>жінка</label>
            </td>
        </tr>
        <tr>
            <td>Місто</td>
            <td>
                <select name="city">
                    <option value="Житомир" <?php checkedMultipartOperators('city', 'Житомир', "selected")?>>Житомир</option>
                    <option value="Бердичів" <?php checkedMultipartOperators('city', 'Бердичів', "selected")?>>Бердичів</option>
                    <option value="Київ" <?php checkedMultipartOperators('city', 'Київ', "selected")?>>Київ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td rowspan="5">Улюблені ігри: </td>
            <td>
                <label><input type="checkbox" name="games[]" value="футбол" <?php checkedMultipartOperators('games', 'футбол', 'checked')?>>футбол</label>
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="games[]" value="баскетбол" <?php checkedMultipartOperators('games', 'баскетбол', 'checked')?>>баскетбол</label>
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="games[]" value="волейбол" <?php checkedMultipartOperators('games', 'волейбол', 'checked')?>>волейбол</label>
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="games[]" value="шахи" <?php checkedMultipartOperators('games', 'шахи', 'checked')?>>шахи</label>
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="games[]" value="World of Tanks"  <?php checkedMultipartOperators('games', 'World of Tanks', 'checked')?>>World of Tanks</label>
            </td>
        </tr>
        <tr>
            <td>Про себе:</td>
            <td><textarea name="bio"><?php checked('bio');?></textarea></td>
        </tr>
        <tr>
            <td>Фотографія</td>
            <td><input type="file" name="photo" accept="image/jpeg, image/png, image/jpg"></td>
        </tr>
        <tr>
            <td rowspan="2">
               <button>Зареєструватися</button>
            </td>
        </tr>
    </table>
</form>
<?php
if(is_dir('photo')){
    function deleteDir($nameDir){
                $dir = opendir($nameDir);
                while(($file = readdir($dir))!== false){
                    if($file != '.' && $file != '..'){
                        if (is_dir($nameDir."/".$file))
                            deleteDir($nameDir."/".$file);
                        else
                            unlink($nameDir."/".$file);
                    }
            }
            closedir($dir);
            rmdir($nameDir);
            return true;
        }
        deleteDir('photo');
}
?>
<?php
if(isset($_GET['lang'])){
    setcookie('lang', "{$_GET['lang']}", time()+15638400);
    switch ($_GET['lang']){
        case 'ukr' : $str= 'Вибрана мова українська'; break;
        case 'pol' : $str= 'Wybrany język to polski'; break;
        case 'usa' : $str= 'The selected language is english'; break;
        case 'germ' : $str= 'Die gewählte Sprache ist Deutsch'; break;
        case 'fran' : $str= 'La langue sélectionnée est le français'; break;
        case 'belor' : $str= 'Абраная мова беларуская'; break;
    }
    echo $str;
}
?>
</body>
</html>
