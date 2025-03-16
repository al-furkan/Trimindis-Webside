<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM service WHERE id=$id");
    $service = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    
    // Check if a new image was uploaded
    if ($_FILES["img"]["name"]) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $stmt = $conn->prepare("UPDATE service SET title=?, summary=?, img=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $summary, $target_file, $id);
    } else {
        $stmt = $conn->prepare("UPDATE service SET title=?, summary=? WHERE id=?");
        $stmt->bind_param("ssi", $title, $summary, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Service updated successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error updating service!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Service</h2>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $service['id']; ?>">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= $service['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Summary</label>
                <textarea name="summary" class="form-control" required><?= $service['summary']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="img" class="form-control">
                <img src="<?= $service['img']; ?>" width="80">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>