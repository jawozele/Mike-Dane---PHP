<!DOCTYPE html>
<html>
<head>
<title>Input</title>
</head>
<body>



    <form action="calc.php" method="post">
        First Numb:<input type="number step="0.0001" name="num1" placeholder="enter a number"> <br>
        OP: <input type="text" name="op" placeholder="operator"><br>
        Second Num:<input type="number" name="num2" placeholder="enter a number"> <br>
        <input type="submit">
    </form>
        <?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op   = $_POST["op"];
if ($op == "+") {
    echo $num1 + $num2;
} elseif ($op == "-") {
    echo $num1 - $num2;
} elseif ($op == "/") {
    echo $num1 / $num2;
} elseif ($op == "*") {
    echo $num1 * $num2;
} else {
    echo "Invalid Operator";
}
?>
</body>
</html>
