<?php
include('connection/db.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch video details from the database
$sql = "SELECT video FROM learn ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $videoFileName = $row["video"];
?>
    <div style="width: 60%; padding: 3%; margin-left: 20%; background-color: #F2F4F4;">
        <div id="msg"></div>
        <form action="video_add.php" method="post" style="margin:5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
            <div style="text-align:center;" class="form-group">
                <video width="80%" height="50%" controls>
                    <source src="videos/<?php echo $videoFileName; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </form>
    </div>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
