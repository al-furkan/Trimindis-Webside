<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM hero WHERE id=$id");
    $hero = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $main_title = $_POST['main_title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE hero SET main_title=?, description=? WHERE id=?");
    $stmt->bind_param("ssi", $main_title, $description, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error updating record!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hero</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Hero</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $hero['id']; ?>">
            <div class="mb-3">
                <label>Main Title</label>
                <input type="text" name="main_title" class="form-control" value="<?= $hero['main_title']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required><?= $hero['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>