<?php
$var = 5;
function local(){
    global $var;
    echo $var;
}

local();
 ?>
