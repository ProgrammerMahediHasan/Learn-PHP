<?php

$Colors=["Red","Green","White","Yellow"];
echo "<pre>";
print_r($Colors);
echo "</pre>";

echo "<br>";


$Fishes=["Hilsha","Koi","Telapia","Rui"];
echo $Fishes[0] ."<br>";
echo $Fishes[1] ."<br>";
echo $Fishes[2] ."<br>";
echo $Fishes[3] ."<br>";

echo "<br>";


$Profession=["Web Developer","Digital Marketing","Software Engineer","Network Engineer"];
for ($i=0;$i<4;$i++){
    echo $Profession [$i] ."<br>";
}