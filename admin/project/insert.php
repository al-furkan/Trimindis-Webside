<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $link = $_POST['link'];

    // Image Upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

    $stmt = $conn->prepare("INSERT INTO project (title, link, img) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $link, $target_file);

    if ($stmt->execute()) {
        echo "<script>alert('Project added successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error adding project!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Add New Project</h2>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Project Link</label>
                <input type="text" name="link" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="img" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>