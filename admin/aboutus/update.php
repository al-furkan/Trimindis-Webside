<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM about WHERE id=$id");
    $about = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $summary = $_POST['summary'];

    $stmt = $conn->prepare("UPDATE about SET title=?, summary=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $summary, $id);

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
    <title>Edit About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit About</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $about['id']; ?>">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= $about['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Summary</label>
                <textarea name="summary" class="form-control" required><?= $about['summary']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>