<?php
include('connection/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and file upload
    $videoTitle = $_POST['des'];
    $userEmail = $_POST['user_email'];
    $category = $_POST['category'];

    // Handle file upload
    $tempVideoPath = $_FILES['video']['tmp_name'];
    $videoFileName = $_FILES['video']['name'];
    $uploadedVideoPath = "videos/" . $videoFileName;
    move_uploaded_file($tempVideoPath, $uploadedVideoPath);

    // Save a copy to admin/video path
    $adminVideoPath = "admin/videos/" . $videoFileName;
    copy($uploadedVideoPath, $adminVideoPath);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO learn (title, video, email, category) VALUES ('$videoTitle', '$videoFileName', '$userEmail', '$category')";

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
