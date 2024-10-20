<?php
require '../config.php';
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM photos WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('Location: view.php');
}
?>
