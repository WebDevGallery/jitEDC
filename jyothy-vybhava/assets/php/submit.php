<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (change these credentials as per your setup)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $email = $_POST["email_address"];
    $stmt = $conn->prepare("INSERT INTO subsdata (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // Execute the query
    if ($stmt->execute() === TRUE) {
        header("Location: https://edcjit.in/jyothy-vybhava/");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
