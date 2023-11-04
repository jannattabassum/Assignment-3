<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>
    <h1>Count Vowels in a String</h1>
    <form method="post">
        Enter a string: <input type="text" name="inputString">
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        
        function countVowels($inputString) {
            // Remove non-alphabetic characters and convert the string to lowercase
            $cleanedString = preg_replace("/[^a-zA-Z]/", "", strtolower($inputString));

            // Define an array of vowels
            $vowels = ["a", "e", "i", "o", "u"];

            // Initialize a count for vowels
            $vowelCount = 0;

            // Loop through the cleaned string and count the vowels
            for ($i = 0; $i < strlen($cleanedString); $i++) {
                if (in_array($cleanedString[$i], $vowels)) {
                    $vowelCount++;
                }
            }

            return $vowelCount;
        }

        $vowelCount = countVowels($inputString);
        echo "Number of vowels in the string: " . $vowelCount;
    }
    ?>
</body>
</html>
