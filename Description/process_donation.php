<?php
// Configuration
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testing";

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donation_amount = $_POST["donation_amount"];
    $donor_name = $_POST["donor_name"];
    $donor_email = $_POST["donor_email"];

    // Validate donation amount
    if (!empty($donation_amount) && is_numeric($donation_amount) && $donation_amount > 0) {
        // Validate donor name and email
        if (!empty($donor_name) && !empty($donor_email)) {
            // Insert donation details into database
            $sql = "INSERT INTO donations (donation_amount, donor_name, donor_email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $donation_amount, $donor_name, $donor_email);
            $stmt->execute();

            // Send confirmation email to donor
            $subject = "Donation Confirmation";
            $message = "Thank you for your donation of ₹" . $donation_amount . ". Your support means a lot to us!";
            $headers = "From: your_email@example.com\r\n";
            mail($donor_email, $subject, $message, $headers);

            // Display success message
            echo "Thank you for your donation! Your support means a lot to us.";
        } else {
            echo"
            <script>
                alert('Please enter a valid donor name and email.');
                window.location.href='donation.php';
            </script>
";
        }
    } else {
        echo"
            <script>
                alert('Please enter a valid donation amount.');
                window.location.href='donation.php';
            </script>
";
    }
}

// Close connection
$conn->close();
?>