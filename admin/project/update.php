<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM project WHERE id=$id");
    $project = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $link = $_POST['link'];
    
    if ($_FILES["img"]["name"]) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $stmt = $conn->prepare("UPDATE project SET title=?, link=?, img=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $link, $target_file, $id);
    } else {
        $stmt = $conn->prepare("UPDATE project SET title=?, link=? WHERE id=?");
        $stmt->bind_param("ssi", $title, $link, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Project updated successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error updating project!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Project</h2>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $project['id']; ?>">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= $project['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Project Link</label>
                <input type="text" name="link" class="form-control" value="<?= $project['link']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="img" class="form-control">
                <img src="<?= $project['img']; ?>" width="80">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>