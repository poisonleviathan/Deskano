<?php
if (isset($_GET['state_id'])) {
    $state_id = $_GET['state_id'];

    // Replace with your database connection code
       include('connection/db.php');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name FROM cities WHERE state_id = '$state_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Start building the options
        $options = '<option value="">Select City</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $options .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        echo $options;
    } else {
        echo '<option value="">No cities found</option>';
    }

    mysqli_close($conn);
}
?>
