<?php

// 1️⃣ Basic If-Else Condition
$age = 16;
if ($age>=18){
    echo "You are eligible to vote";
}else {
    echo "You are not eligible to vote";
}

echo "<br>";

// Task:
// যদি age 18 বা তার বেশি হয়, "You are eligible to vote" print করো।
// না হলে "You are not eligible to vote" print করো।

// 2️⃣ If-Else with Comparison
$marks = 45;
if ($marks>=50){
    echo "Pass";
}else {
    echo "Fail";
}

echo "<br>";
// Task:
// যদি marks ≥ 50 হয়, "Pass" print করো।
// অন্যথায় "Fail" print করো।


// 3️⃣ If-Else with Arithmetic / Odd-Even Check
$number = 12;
if ($number%2==0){
    echo "Even Number";
}else {
    echo "Odd Number";
}


// Task:
// যদি number 2 দিয়ে ভাগ করলে remainder 0 হয়, "Even Number" print করো।
// অন্যথায় "Odd Number" print করো।