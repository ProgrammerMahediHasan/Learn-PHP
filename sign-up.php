<?php

if ($_POST){
    echo "This username is " . $_POST['username'];
    echo "<br>";
    echo "This username password is " . $_POST['password'];
    echo "<br>";
    echo "This username email is " . $_POST['email'];
}