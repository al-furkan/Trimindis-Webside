<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $summary = $_POST['summary'];

    $stmt = $conn->prepare("INSERT INTO about (title, summary) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $summary);

    if ($stmt->execute()) {
        echo "<script>alert('Record added successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error adding record!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Add New About Entry</h2>
        <form action="insert.php" method="POST">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Summary</label>
                <textarea name="summary" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>