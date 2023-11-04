<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Database connection information
    $hostname = "localhost"; // Replace with your database host
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $database = "form"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user information into the "users" table
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Display a confirmation message
        echo "User information has been successfully saved.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
