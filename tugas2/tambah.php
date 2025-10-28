<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Film</title>
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

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg col-md-6 p-4">
    <h2 class="text-center mb-4">Tambah FILM</h2>

    <form action="create.php" method="POST">
        <div class="mb-3">
            <label>Judul Film</label>
            <input type="text" class="form-control" name="judul" required>
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <select class="form-control" name="genre" required>
                <option>romance</option>
                <option>action</option>
                <option>horror</option>
                <option>comedy</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Sutradara</label>
            <input type="text" class="form-control" name="sutradara" required>
        </div>

        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" min="1888" max="2025" class="form-control" name="tahun" required>
        </div>

        <button class="btn btn-success w-100">Tambah</button>
        <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
    </form>

  </div>
</div>

</body>
</html>