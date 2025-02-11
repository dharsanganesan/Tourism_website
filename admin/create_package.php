<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('main.php'); // Ensure $conn is initialized

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate required fields
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $type = isset($_POST['type']) ? mysqli_real_escape_string($conn, $_POST['type']) : '';
    $location = isset($_POST['location']) ? mysqli_real_escape_string($conn, $_POST['location']) : '';
    $free = isset($_POST['free']) ? mysqli_real_escape_string($conn, $_POST['free']) : '';
    $detail = isset($_POST['detail']) ? mysqli_real_escape_string($conn, $_POST['detail']) : '';

    // Handle Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = basename($_FILES['image']['name']); // Only filename, not full path
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "image/" . $image; // Store relative path in DB

        // Ensure the "image/" directory exists
        if (!is_dir('image')) {
            mkdir('image', 0777, true);
        }

        if (move_uploaded_file($tempname, $folder)) {
            // Insert into database with relative path
            $qry = "INSERT INTO `create_package` (`name`, `type`, `location`, `free`, `detail`, `image`) 
                    VALUES ('$name', '$type', '$location', '$free', '$detail', '$folder')";

            $result = mysqli_query($conn, $qry);

            if ($result) {
                echo "<script type='text/javascript'> document.location ='package.php'; </script>";
                exit();
            } else {
                echo "<script>alert('Database Error: Unable to insert record');</script>";
            }
        } else {
            echo "<script>alert('Image Upload Failed');</script>";
        }
    } else {
        echo "<script>alert('No Image Selected or Upload Error');</script>";
    }
} else {
    echo "<script>alert('Invalid Request');</script>";
}
?>
