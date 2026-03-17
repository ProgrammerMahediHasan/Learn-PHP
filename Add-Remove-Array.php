<?php



// add array 

$employee=["Mahedi","Pollob","Harun"];

array_push($employee,"Rashed","Tanvir");

echo"<pre>";
print_r($employee);
echo "</pre>";

echo "<br>";

// single remove array 


$employee=["Mahedi","Pollob","Harun"];

array_pop($employee);

echo"<pre>";
print_r($employee);
echo "</pre>";


echo "<br>";

//  multiple remove array 

$employee=["Mahedi","Pollob","Harun"];
array_push($employee,"Rashed","Tanvir");
array_splice($employee,-2);

echo"<pre>";
print_r($employee);
echo "</pre>";
