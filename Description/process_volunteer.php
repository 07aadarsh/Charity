<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'testing';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $volunteer_name = $_POST["volunteer_name"];
    $volunteer_email = $_POST["volunteer_email"];
    $volunteer_phone = $_POST["volunteer_phone"];
    $volunteer_address = $_POST["volunteer_address"] ?? ' ';
    $availability_date = $_POST["availability_date"] ?? ' ';
    $skills = $_POST["skills"];

    // Insert data into database
    $sql = "INSERT INTO volunteers (volunteer_name, volunteer_email, volunteer_phone, volunteer_address, volunteer_type, availability_date, skills) VALUES ('$volunteer_name', '$volunteer_email', '$volunteer_phone', '$volunteer_address', '$volunteer_type', '$availability_date', '$skills')";

    if ($conn->query($sql) === TRUE) {
        echo "Volunteer application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>