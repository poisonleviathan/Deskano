<?php
if (isset($_GET['country_id'])) {
    $country_id = $_GET['country_id'];

    // Replace with your database connection code
   include('connection/db.php');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name FROM states WHERE country_id = '$country_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Start building the options
        $options = '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $options .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        echo $options;
    } else {
        echo '<option value="">No states found</option>';
    }

    mysqli_close($conn);
}
?>
