<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP is empty
$dbname = "luminari_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];

// SQL query to insert data into the users table
$sql = "INSERT INTO users (name, age, email, height, weight) 
        VALUES ('$name', '$age', '$email', '$height', '$weight')";

if ($conn->query($sql) === TRUE) {
    // Redirect to index2.html after form submission
    header("Location: index2.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
