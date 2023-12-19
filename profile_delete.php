<?php
include("include/header.php");
include("connection/db.php");
?>
<form method="post" action="">
    <div style="margin-top:30px; text-align:center;">
        <h1>We are sorry to see you leave us...😥</h1>
        <p style="font-size:16pt; color:black;">If you have any concerns or find anything unusual, please don't hesitate to reach out to us.</p>
        <p><a style="margin-top:20px; margin-bottom:20px;" href="contact.php" class="btn btn-primary">Contact Us</a></p>
        <p style="font-size:16pt; margin-top:20px; color:black;">or</p>
        <input style="color:white; margin-top:20px; margin-bottom:10px;" type="submit" id="submit" placeholder="Delete Account" value="Delete Account" name="submit" class="btn btn-danger">
        <p>Note: This action will permanently delete your account and cannot be undone.</p>
        <p><a style="margin-top:20px; margin-bottom:20px; width:5%;" href="my_profile.php" class="btn btn-secondary">Back</a></p>
    </div>
</form>

<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
    
    // Retrieve user's email from the session
    session_start();
    $userEmail = $_SESSION['email']; // Replace 'user_email' with the actual session variable you are using

    // Perform the delete operation
    $sql = "DELETE FROM jobskeer WHERE email = '$userEmail'";
    
    if (mysqli_query($conn, $sql)) {
        // Deletion successful
        echo '<script>alert("Account deleted successfully."); window.location.href = "logout.php";</script>';
        
        // You may want to log the user out or perform any other necessary actions here
    } else {
        // Deletion failed
        echo "Error deleting account: " . mysqli_error($conn);
    }

    // Close the database connection if needed
    mysqli_close($conn);
}
?>