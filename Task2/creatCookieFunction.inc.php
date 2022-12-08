<?php
function createCookie($size){
    setcookie("font-size", "", time()-3600, '../');
    setcookie("font-size", "$size", time()+3600, '../');
}
