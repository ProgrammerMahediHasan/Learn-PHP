<?php

setcookie("food","meat",time()+(86400));


if (isset($_COOKIE['food'])){
    echo "Current Cookie is " .($_COOKIE)['food'] . " ";
} else {
    echo "Opps! here is no cookies";
}