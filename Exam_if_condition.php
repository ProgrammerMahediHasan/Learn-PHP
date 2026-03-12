<?php

// 1️⃣ Even or Odd (if else)

$num = 17;

if ($num%2==0){
    echo "Even";
}else {
    echo "Odd";
}

echo "<br>";

// Task:
// Check করো সংখ্যাটি Even নাকি Odd।


// 2️⃣ Positive / Negative / Zero (if elseif else)


$number =5;

if ($number>0){
    echo "Positive";
}elseif ($number<0){
    echo "Negative";
}else {
    echo "Zero";
}

echo "<br>";

// Task:
// Check করো সংখ্যাটি// Positive// Negative// Zero


// 3️⃣ Largest Number (if elseif else)

$a = 25;
$b = 40;
$c = 18;

if ($a>$b && $a>$c){
    echo "$a is the largest number";
}elseif ($b>$a && $b>$c){
    echo "$b is the largest number";
} else {
    echo "$c is the largest number";
}

echo "<br>";
// Task:
// এই তিনটি সংখ্যার মধ্যে সবচেয়ে বড় সংখ্যাটি print করো।


// 4️⃣ Voting Eligibility (if else)

// একটি variable নাও

$age = 16;

if ($age>=18){
    echo "Eligible";
}else {
    echo "Not Eligible";
}
echo "<br>";
// Task:
// Check করো user vote দিতে পারবে কিনা।// Condition:// 18 বা তার বেশি হলে → Eligible// না হলে → Not Eligible



// 5️⃣ Grade System (if elseif else)

// একটি variable নাও

$marks = 72;
if ($marks>=80){
    echo "A+";
}elseif ($marks>=70 && $marks<=79){
    echo "A";
}elseif ($marks>=60 && $marks<=69){
    echo "A-";
}elseif ($marks>=50 && $marks<=59){
    echo "B";
}else {
    echo "Fail";
}

echo "<br>";

// Task:
// Marks অনুযায়ী grade print করো।

// 80+  = A+// 70-79 = A// 60-69 = A-// 50-59 = B// Below 50 = Fail


// 6️⃣ Day Name (switch)


$day = 3;

switch ($day){
    case 1:
    echo "Monday";
    break;
    case 2:
    echo "Tuesday";
    break;
    case 3:
    echo "Wednesday";
    break;
    case 4:
    echo "Thursday";
    break;
    case 5:
    echo "Friday";
    break;
    case 6:
    echo "Saturday";
    break;
    case 7:
    echo "Sunday";
    break;
    default:
    echo "Invalid Data";
}

echo "<br>";
// Task:
// Switch ব্যবহার করে দিন print করো।

// 1 = Monday// 2 = Tuesday// 3 = Wednesday// 4 = Thursday// 5 = Friday// 6 = Saturday// 7 = Sunday


// 7️⃣ Simple Calculator (switch)

// দুটি variable নাও

$a = 15;
$b = 5;
$operator = "*";

switch ($operator){
    case "+":
    echo "Addition :" . ($a+$b);
    break;
    case "-":
    echo "Subtraction :" . ($a-$b);
    break;
    case "*":
    echo "Multiplication :" . ($a*$b);
    break;
    case "/":
    echo "Division :" . ($a/$b);
    break;
}

echo "<br>";
// Task:
// Switch ব্যবহার করে operation করো।

// +  → Addition
// -  → Subtraction
// *  → Multiplication
// /  → Division


// 8️⃣ Leap Year Check (Intermediate)


$year = 2024;

if (($year%4==0 && $year%100!=0) || ($year%400==0)){
    echo "This is leap year";
} else {
    echo "This is not leap year";
}

// Task:
// Check করো year টি leap year কিনা।

// Condition:

// year % 4 == 0
// and
// year % 100 != 0
// or
// year % 400 == 0