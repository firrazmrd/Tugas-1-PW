<?php
include 'connection.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM film WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

<h2 class="mb-4">Edit Film</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <div class="mb-3">
        <label>Judul Film</label>
        <input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Genre</label>
        <select class="form-control" name="genre" required>
            <option <?= $data['genre']=='romance'?'selected':'' ?>>romance</option>
            <option <?= $data['genre']=='action'?'selected':'' ?>>action</option>
            <option <?= $data['genre']=='horror'?'selected':'' ?>>horror</option>
            <option <?= $data['genre']=='comedy'?'selected':'' ?>>comedy</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Sutradara</label>
        <input type="text" class="form-control" name="sutradara" value="<?= $data['sutradara']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Tahun</label>
        <input type="number" min="1888" max="2025" class="form-control" name="tahun" value="<?= $data['tahun']; ?>" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>