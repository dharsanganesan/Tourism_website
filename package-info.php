<?php
// Include database connection
require_once('main.php');

// Check database connection
if (!$conn || $conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch package details from the `create_package` table
$query = "SELECT * FROM create_package";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Packages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .package-card {
            width: 800px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 20px;
        }
        .package-card img {
            width: 250px;
            height: 180px;
            border-radius: 10px;
            object-fit: cover;
        }
        .package-info {
            flex: 1;
        }
        .package-title {
            font-size: 22px;
            font-weight: bold;
            color: #ff3f00;
        }
        .package-type {
            font-size: 18px;
            font-weight: bold;
        }
        .package-location {
            color: gray;
            font-size: 16px;
            margin-top: 5px;
        }
        .package-features {
            font-size: 16px;
            color: gray;
        }
        .details-btn {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .details-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
    <div class="package-card">
        <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Package Image">
        <div class="package-info">
            <div class="package-title">Package Name: <?php echo htmlspecialchars($row['location']); ?> - Value Added</div>
            <div class="package-type">Package Type:  <?php echo htmlspecialchars($row['type']); ?></div>
            <div class="package-location">Package Location: <?php echo htmlspecialchars($row['location']); ?></div>
            <div class="package-features">Features: <?php echo htmlspecialchars($row['free']); ?></div>
            <button class="details-btn">Details</button>
        </div>
    </div>
<?php
    }
} else {
    echo "<p>No packages found.</p>";
}
?>

</body>
</html>
