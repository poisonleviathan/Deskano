<?php
include('connection/db.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "subscribe") {
    $email = $_POST["NLemail"];

    // Insert email into the "newsletter" datatable
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Subscription successful!'); window.location.href = 'index.php' </script> ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
