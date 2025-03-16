<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM team WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Team member deleted successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error deleting team member!');</script>";
    }
    $stmt->close();
}
?>