<?php
// Ensure this script is being accessed through a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Database connection parameters
    $servername = "90.247.138.228:3306";
    $username = "citylife";
    $password = "ZARP10291";
    $dbname = "form";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the existing database table
    $sql = "INSERT INTO your_existing_table_name (username, email, message) VALUES ('$username', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If someone tries to access this script directly through the browser
    echo "Invalid request";
}
?>
