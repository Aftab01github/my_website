<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

include('../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['category'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "../assets/uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $query = "INSERT INTO photos (category, description, image) VALUES ('$title', '$description', '$image')";
        $conn->query($query);
        header('Location: index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Add data</title>
</head>
<body>
<?php include 'includes/header.php' ?>
<div class="container mt-5">
    <h2>Add Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category">Category:</label>
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Select a category</option>
                <option value="Wedding Photograph">Wedding_photograph</option>
                <option value="Event photograph">Event_photograph</option>
                <option value="wedding videograph">Wedding_videograph</option>
                
                <!-- Add more categories as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image" class="form-control-file" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include 'includes/footer.php' ?>
</body>
</html>

