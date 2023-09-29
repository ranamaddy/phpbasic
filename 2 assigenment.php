<form  method="get">
        <input type="text" name="num1" placeholder="Enter the first number" size="10"> <br>
        <input type="text" name="operator" placeholder="Enter the operator" size="1"><br>
        <input type="text" name="num2" placeholder="Enter the second number" size="10"><br>
        <input type="submit" value="Calculate" name="cal">
    </form>

    <?php
if(isset($_GET['cal']))
{
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

// Check if the input is valid.
if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Invalid input.";
    exit();
}

// Check if the operator is valid.
if ($operator != "+" && $operator != "-" && $operator != "*" && $operator != "/") {
    echo "Invalid operator.";
    exit();
}

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
    exit();
}

// Display the result of the operation.
echo "The result is $result.";


}
?>
