<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM hero WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error deleting record!');</script>";
    }
    $stmt->close();
}
?>