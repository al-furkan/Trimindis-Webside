<?php
include '../db.php';
$result = $conn->query("SELECT * FROM hero");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location.href = "delete.php?id=" + id;
        }
    }
    </script>
</head>

<body>
    <div class="container mt-5">
        <h2>Hero List</h2>
        <a href="insert.php" class="btn btn-primary mb-3">Add New Hero</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Main Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['main_title']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <button onclick="confirmDelete(<?= $row['id']; ?>)"
                            class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>