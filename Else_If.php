<?php
// 1️⃣ Basic Else If (Age Group)
$age = 15;
if ($age<13){
    echo "Child";
}elseif ($age>=13 && $age<20){
    echo "Teenager";
}elseif ($age>=20){
    echo "Adult";
}else {
    echo"Under the age";
}


echo "<br>";

// Task:
// যদি age < 13 → print "Child"
// যদি age >=13 এবং <20 → print "Teenager"
// যদি age >=20 → print "Adult"


// 2️⃣ Else If with Marks (Grade System)
$marks = 78;

if ($marks>=80){
    echo "A+";
}elseif ($marks>=60){
    echo "A";
}elseif ($marks>=40){
    echo "B";
}else {
    echo"fail";
}

echo "<br>";

// Task:
// যদি marks ≥ 80 → print "A+"
// যদি marks ≥ 60 এবং < 80 → print "A"
// যদি marks ≥ 40 এবং < 60 → print "B"
// অন্যথায় → print "Fail"


// 3️⃣ Else If with Temperature Check
$temp = 35;
if ($temp>=35){
    echo"Hot";
}elseif ($temp>=25){
    echo "Warm";
}elseif ($temp>=15){
    echo "Cool";
}else {
    echo "Cold";
}

echo "<br>";

// Task:
// যদি temp ≥ 35 → print "Hot"
// যদি temp ≥ 25 এবং < 35 → print "Warm"
// যদি temp ≥ 15 এবং < 25 → print "Cool"
// অন্যথায় → print "Cold"


// 4️⃣ Else If with Number Check (Divisible)
$number = 12;

if ($number%3==0){
    echo "Divisible by 3";
}elseif ($number%4==0){
    echo "Divisible by 4";
}elseif ($number%5==0){
    echo "Divisible by 5";
}else {
    echo "Not Divisible by 3,4,5";
}


// Task:
// যদি number 3 দিয়ে ভাগ হয় → print "Divisible by 3"
// যদি number 4 দিয়ে ভাগ হয় → print "Divisible by 4"
// যদি number 5 দিয়ে ভাগ হয় → print "Divisible by 5"
// অন্যথায় → print "Not divisible by 3,4,5"