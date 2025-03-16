<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM project WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Project deleted successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error deleting project!');</script>";
    }
    $stmt->close();
}
?>