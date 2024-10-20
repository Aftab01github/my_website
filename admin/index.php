<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

include('../config.php');

// Fetch statistics
$photo_count_query = "SELECT COUNT(*) as total_photos FROM photos";
$photo_count_result = $conn->query($photo_count_query);
$photo_count = $photo_count_result->fetch_assoc()['total_photos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <title>Admin Dashboard</title>
</head>
<body>
   
 <?php include('includes/header.php'); ?>
    <div class="container mt-5">
        <h2>Admin Dashboard</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Photos</h5>
                        <p class="card-text"><?= $photo_count ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
