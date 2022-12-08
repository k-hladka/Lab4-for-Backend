<?php
if(isset($_POST['text'])){
    $pattern = '/https?:\/\/([\w\d\.\/\=\-\?]){1,}[^\. ,]/im';
//    $arrayLinks = preg_grep($pattern, $_POST['text']);
    $replace = preg_replace($pattern, 'тут була адреса', $_POST['text']);

    echo "<span style='color: blue; font-weight: bold; font-size: 1.3em;'>Було:</span>
            <span style='font-size: 1.3rem;'>{$_POST['text']}</span><br>";
    echo "<hr>";
    echo "<span style='color: darkgreen; font-weight: bold; font-size: 1.3em;'>Стало:</span> 
            <span style='font-size: 1.3rem;'>$replace</span><br>";
}
