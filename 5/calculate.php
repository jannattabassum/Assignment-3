<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post" action="">
        Enter the first number: <input type="text" name="num1"><br>
        Enter the second number: <input type="text" name="num2"><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Check if both inputs are valid numbers
        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;

            if ($num2 != 0) {
                $quotient = $num1 / $num2;
            } else {
                $quotient = "Undefined (division by zero)";
            }

            echo "Sum: $sum<br>";
            echo "Difference: $difference<br>";
            echo "Product: $product<br>";
            echo "Quotient: $quotient";
        } else {
            echo "Please enter valid numbers.";
        }
    }
    ?>
</body>
</html>
