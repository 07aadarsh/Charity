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
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $child_name = $_POST["child_name"];
    $child_age = $_POST["child_age"];
    $adoption_reason = $_POST["adoption_reason"];

    // Insert data into database
    $sql = "INSERT INTO adoptions (name, email, phone, address, child_name, child_age, adoption_reason) VALUES ('$name', '$email', '$phone', '$address', '$child_name', '$child_age', '$adoption_reason')";
    if ($conn->query($sql) === TRUE) {
        echo "Adoption request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>