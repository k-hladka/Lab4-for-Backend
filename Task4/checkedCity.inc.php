<?php
function checkedMultipartOperators($name, $value, $echoValue){
    if(isset($_SESSION[$name])){
        $sessionValue = $_SESSION[$name];

        if(is_array($sessionValue)){
            foreach($sessionValue as $v)
                if($v=== $value)
                    echo $echoValue;
        }
        else
            if($sessionValue=== $value)
                echo $echoValue;
    }
}
