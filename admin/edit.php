<?php
require '../config.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Initialize variables
$categoryName = $description = $image = "";
$id = null;
$errorMsg = "";

// Check if 'id' parameter is set and retrieve the record
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM photos WHERE id=$id");
    if ($result->num_rows > 0) {
        $category = $result->fetch_assoc();
        $categoryName = $category['category'];
        $description = $category['description'];
        $image = $category['image'];
    } else {
        $errorMsg = "Category not found.";
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $categoryName = $_POST['category'];
    $description = $_POST['description'];

    // Handle file upload
    if (!empty($_FILES["image"]["name"])) {
        $targetDir = "../assets/uploads/";
        $image = basename($_FILES["image"]["name"]);
        $targetFile = $targetDir . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        // Update with image
        $stmt = $conn->prepare("UPDATE photos SET category=?, description=?, image=? WHERE id=?");
        $stmt->bind_param("sssi", $categoryName, $description, $image, $id);
    } else {
        // Update without image
        $stmt = $conn->prepare("UPDATE photos SET category=?, description=? WHERE id=?");
        $stmt->bind_param("ssi", $categoryName, $description, $id);
    }

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: view.php'); // Redirect on successful update
        exit();
    } else {
        $errorMsg = "Failed to update the category.";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Resources</title>
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="view.php">Resources</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="container mt-5">
        <h2>Edit Category</h2>
        <?php if ($errorMsg): ?>
            <div class="alert alert-danger"><?= $errorMsg ?></div>
        <?php endif; ?>
        <form action="edit.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="form-group">
                <label for="category">Category Name</label>
                <input type="text" name="category" class="form-control" value="<?= htmlspecialchars($categoryName) ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required><?= htmlspecialchars($description) ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Category Image</label>
                <?php if (!empty($image)): ?>
                    <div>
                        <img src="../assets/uploads/<?= htmlspecialchars($image) ?>" alt="Current Image" width="100">
                    </div>
                <?php endif; ?>
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
