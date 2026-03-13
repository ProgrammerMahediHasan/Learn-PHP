<?php

function variable(){
    echo "This is variable function" ;
}

$var="variable";
$var();

echo "<br>";

function name($var){
     $var();
}

name($var);