<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">Manajemen Film</a>
    <div class="navbar-nav">
      <a class="nav-link" href="index.php">Home</a>
      <a class="nav-link" href="tambah.php">Tambah Film</a>
    </div>
  </div>
</nav>

<div class="container py-4">
<div class="row mt-4">
    <div class="col-md-8">
        <h2>Selamat Datang di Manajemen Film</h2>
        <p>Ini adalah daftar film Anda.</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Tahun Rilis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM film ORDER BY id ASC");
        $no = 1;
        while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['genre']; ?></td>
            <td><?= $row['sutradara']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

    </div>
    <div class="col-md-4">
        <img src="img.jpg"
             class="img-fluid rounded">
    </div>
</div>
</div>

</body>
</html>