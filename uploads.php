<?php
$page='home';
include('connection/db.php');
include('include/tutor_header.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch video details from the database
$sql= "SELECT * FROM learn WHERE email ='".$_SESSION['email']."'";
$result = $conn->query($sql);
?>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $videoFileName = $row["video"];
            $title = $row['title'];
    ?>

<style>
    .video-container {
        width: 40%;
        padding: 3%;
        margin: 20px auto;
        background-color: #ececec;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

        <div class="video-container">
            <div id="msg"></div>
            <form action="video_add.php" method="post"  style="margin: 5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
                <div style="text-align:center;" class="form-group">
                    <div>
                        <div></div>
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <video width="90%" height="50%" controls>
                        <source src="videos/<?php echo $videoFileName; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </form>
            <div style="display: flex; margin-bottom:20px; justify-content: center;">
                <button type="btn" onclick="confirmAndDelete(<?php echo $row['id'];  ?>)" class="col-md-4 btn btn-danger"><span class="fa fa-trash"></span>Delete </button>
                <script>
                    function confirmAndDelete(id) {
                        if (confirm('Are you sure you want to delete this record?')) {
                            window.location = "video_delete.php?del="+id ;
                        } else {
                            
                        }
                    }
                </script>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"></div>
        </div>
    <?php
        }
    } else {
        echo "<p style='text-align:center; margin-top:100px;'>You didn't upload videos to the Learn yet</p>";
    }

    $conn->close();
    ?>

    </body>
</html>
