<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin: 20px;
        }
        .result {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sum of Even Numbers</h1>
        <form method="post">
            Enter numbers (comma-separated): <input type="text" name="numbers">
            <input type="submit" value="Calculate">
        </form>
        <?php
            function sumEvenNumbers($arr) {
                $sum = 0;

                foreach ($arr as $num) {
                    if ($num % 2 == 0) {
                        $sum += $num;
                    }
                }

                return $sum;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST["numbers"];
                $numbers = explode(",", $input);

                $evenSum = sumEvenNumbers($numbers);
                echo "<p class='result'>Sum of even numbers: $evenSum</p>";
            }
        ?>
    </div>
</body>
</html>
