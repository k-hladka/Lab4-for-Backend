<?php
function checked($name, $mode=0, $value=''){
    if(isset($_SESSION[$name])){
        if($mode === 0)
        echo $_SESSION[$name];
        if($mode === 1)
            echo "$value";
    }
}
