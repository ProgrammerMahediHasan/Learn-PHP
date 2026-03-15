<?php

// local variable 


function local(){
    $x="local Function";
    echo "This is " . "<b>$x</b> only inside the function";
}

local();

echo "<br>";

// global variable 
    $x="global Function";
function globalfun(){
    global $x;
    echo "This is " . "<b>$x</b> inside the function" ."<br>";
}

globalfun();
echo "This is " . "<b>$x</b> outside  the function";
