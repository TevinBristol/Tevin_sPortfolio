<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the rating value
    $rating = $_POST['rating'];

    // Database credentials
    $servername = "localhost";
    $username = "tevinb";
    $password = "Tevin1944";
    $database = "tevinb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO ratings (rating) VALUES (?)");
    $stmt->bind_param("i", $rating);

    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
        echo "Rating saved successfully";
        // Redirect users back to faq.html
        header("Location: faq.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>