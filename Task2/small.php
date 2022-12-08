<?php
include_once('creatCookieFunction.inc.php');
createCookie('10px');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmallText</title>
</head>
<body
    <?php if(isset($_COOKIE['font-size'])):?>
        style="font-size: <?=$_COOKIE['font-size'];?>
        <?php endif;?>
                ">
<a href="formLinks.php">На головну</a>
<p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa earum error est excepturi in
    sequi suscipit? Dignissimos magnam officia sit unde? Ab aliquid, earum et mollitia necessitatibus obcaecati
    quasi.</p>
<p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa earum error est excepturi in
    sequi suscipit? Dignissimos magnam officia sit unde? Ab aliquid, earum et mollitia necessitatibus obcaecati
    quasi.</p>
<p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa earum error est excepturi in
    sequi suscipit? Dignissimos magnam officia sit unde? Ab aliquid, earum et mollitia necessitatibus obcaecati
    quasi.</p>
<p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa earum error est excepturi in
    sequi suscipit? Dignissimos magnam officia sit unde? Ab aliquid, earum et mollitia necessitatibus obcaecati
    quasi.</p>
<p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa earum error est excepturi in
    sequi suscipit? Dignissimos magnam officia sit unde? Ab aliquid, earum et mollitia necessitatibus obcaecati
    quasi.</p>

</body>
</html>
