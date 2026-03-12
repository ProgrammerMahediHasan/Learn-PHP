<?php

// 1️⃣ Basic Switch Case (Day Name)
$day = "4";

switch ($day){
    case "1":
    echo "Today is Monday";
    break;
    case "2":
    echo "Today is Tuesday";    
    break;    
    case "3":
    echo "Today is Wednesday";    
    break;    
    case "4":
    echo "Today is Thursday";    
    break;   
    case "5":
    echo "Today is Friday";    
    break;   
    default :
    echo "Invalid Day";
}

echo "<br>";

// Task:

// 1 → "Monday"
// 2 → "Tuesday"
// 3 → "Wednesday"
// 4 → "Thursday"
// 5 → "Friday"
// Default → "Invalid Day"

// 2️⃣ Switch Case (Grade System)
$grade = "B";

switch ($grade){
    case "A+":
    echo "Excellent";
    break;    
    case "A":
    echo "Very Good";
    break;    
    case "B":
    echo "Good";
    break;    
    case "C":
    echo "Average";
    break; 
    default:
    echo "Fail";   
}

echo "<br>";

// Task:

// "A+" → "Excellent"
// "A" → "Very Good"
// "B" → "Good"
// "C" → "Average"
// Default → "Fail"


// 3️⃣ Switch Case (Simple Calculator)
$num1 = 10;
$num2 = 5;
$operator = "-";

switch ($operator){
    case "+":
    echo "Addition " . ($num1+$num2);
    break;
    case "-":
    echo "Subtraction " . ($num1-$num2);
    break;
    case "*":
    echo "Multiplication " . ($num1*$num2);
    break;
    case "/":
    echo "Division " . ($num1/$num2);
    break;
    default: echo "Invalid Operator"   ;
}

echo "<br>";

// Task:

// "+" → Addition result print করো
// "-" → Subtraction result print করো
// "*" → Multiplication result print করো
// "/" → Division result print করো
// Default → "Invalid Operator"


// 4️⃣ Switch Case (Month Name)
$month = 3;

switch ($month){
    case "1":
    echo "January";
    break;    
    case "2":
    echo "February";
    break;    
    case "3":
    echo "March";
    break;    
    case "4":
    echo "April";
    break;    
    case "5":
    echo "May";
    break;    
    case "6":
    echo "June";
    break;    
    case "7":
    echo "July";
    break;    
    default: echo "Invalid Month";
}

// 1 → January
// 2 → February
// 3 → March
// 4 → April
// 5 → May
// 6 → June
// 7 → July
// Default → "Invalid Month"