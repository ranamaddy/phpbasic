
<?php
/*
create a calculator with 3 variables, 2 number variables and 1 operator variable using if-else if in PHP, you can use the following steps:

Create two variables to store the two numbers, and one variable to store the operator.
Use an if-else if statement to check the value of the operator variable.
Perform the appropriate operation on the two numbers based on the value of the operator variable.
Display the result of the operation.
Here is an example of a calculator with 3 variables, 2 number variables and 1 operator variable using if-else if in PHP:


*/



$num1 = 10;
$num2 = 5;
$operator = "+";

// Calculate the result of the operation based on the operator variable.
if ($operator == "+") {
    $result = $num1 + $num2;
} elseif ($operator == "-") {
    $result = $num1 - $num2;
} elseif ($operator == "*") {
    $result = $num1 * $num2;
} elseif ($operator == "/") {
    $result = $num1 / $num2;
} else {
    echo "Invalid operator.";
}

// Display the result of the operation.
echo "The result is $result.";

?>
