<?php

if ($_REQUEST){
    echo "This user name is ". $_POST['username'];
    echo "<br>";
    echo "This user password is ". $_POST['password'];
    echo "<br>";
    echo "This user email is ". $_POST['email'];
}