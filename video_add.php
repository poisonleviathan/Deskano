<?php
include('connection/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and file upload
    $videoTitle = $_POST['des'];
    $userEmail = $_POST['user_email'];

    // Handle file upload
    $tempVideoPath = $_FILES['video']['tmp_name'];
    $videoFileName = $_FILES['video']['name'];
    $uploadedVideoPath = "videos/" . $videoFileName;
    move_uploaded_file($tempVideoPath, $uploadedVideoPath);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO learn (title, video, email) VALUES ('$videoTitle', '$videoFileName', '$userEmail')";

    if ($conn->query($sql) === TRUE) {
        echo "Video uploaded successfully.";
        header("Location: tutor_home.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    exit();
}
?>
