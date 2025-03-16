<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM team WHERE id=$id");
    $team = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $summary = $_POST['summary'];
    
    if ($_FILES["img"]["name"]) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $stmt = $conn->prepare("UPDATE team SET name=?, summary=?, img=? WHERE id=?");
        $stmt->bind_param("sssi", $name, $summary, $target_file, $id);
    } else {
        $stmt = $conn->prepare("UPDATE team SET name=?, summary=? WHERE id=?");
        $stmt->bind_param("ssi", $name, $summary, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Team member updated successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error updating team member!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Team Member</h2>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $team['id']; ?>">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?= $team['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Summary</label>
                <textarea name="summary" class="form-control" required><?= $team['summary']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="img" class="form-control">
                <img src="<?= $team['img']; ?>" width="80">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>