<?php 
// Write a PHP program that checks if a number is even or odd.



$number = 10;

if ($number % 2 == 0) {
    echo "$number is even.";
} else {
    echo "$number is odd.";
}

?>


<?php

// Calculate the shipping cost based on the order total:

$orderTotal = 100;

if ($orderTotal < 25) {
    $shippingCost = 5;
} elseif ($orderTotal >= 25 && $orderTotal < 50) {
    $shippingCost = 10;
} else {
    $shippingCost = 15;
}

// Display the shipping cost.
echo "The shipping cost is $shippingCost.";

?>



<?php
// Check if a student passed or failed a class based on their grade:

$grade = 75;

if ($grade >= 60) {
    echo "The student passed the class.";
} else {
    echo "The student failed the class.";
}

?>



<?php
// Determine the grade of a student based on their score on a test:

$score = 85;

if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80 && $score < 90) {
    $grade = "B";
} elseif ($score >= 70 && $score < 80) {
    $grade = "C";
} elseif ($score >= 60 && $score < 70) {
    $grade = "D";
} else {
    $grade = "F";
}

// Display the student's grade.
echo "The student's grade is $grade.";

?>


<?php
// Check if a user is logged in

$isLoggedIn = true;

if ($isLoggedIn) {
    echo "The user is logged in.";
} else {
    echo "The user is not logged in.";
}

?>


<?php
// Grant different permissions to users based on their role

$role = "admin";

if ($role == "admin") {
    // Grant admin permissions.
} elseif ($role == "editor") {
    // Grant editor permissions.
} elseif ($role == "reader") {
    // Grant reader permissions.
} else {
    // Grant guest permissions.
}

?>



