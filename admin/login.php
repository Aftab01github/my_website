<?php
include('../config.php');


// Set secure session cookie parameters
session_set_cookie_params([
    'lifetime' => 0, // Session cookie persists until the browser is closed
    'path' => '/',
    'domain' => '', // Set to your domain
    'secure' => true, // Only if using HTTPS
    'httponly' => true, // Prevent access via JavaScript
    'samesite' => 'Strict' // Mitigate CSRF
]);
session_start();
 if (isset($_SESSION['id'])) {
    header('Location: index.php'); // Redirect to login page if not logged in
    exit();
}
$error = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use a prepared statement
    $stmt = $conn->prepare("SELECT * FROM `admin_users` WHERE `username` = ? AND `password` = ?");
    $stmt->bind_param("ss", $username, $password); // "ss" means two strings

    $stmt->execute();
    $result = $stmt->get_result();
    $fetch = $result->fetch_array();
    $row = $result->num_rows;

    if ($row > 0) {
        // Regenerate session ID
        session_regenerate_id(true);
        $_SESSION['id'] = $fetch['id'];
        header('location:index.php');
        exit(); // Ensure no further code is executed
    } else {
        $error = "Invalid username or password";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mt-5">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Administrator Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
                        <?php endif; ?>
                        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-4SKzr+8TJ09LLb9Gg7CmKeoGqCbIu+hFwXTwYY3A7MdZEdBE8+AXhAbSIB+uCMnN" crossorigin="anonymous"></script>
</body>
</html>
