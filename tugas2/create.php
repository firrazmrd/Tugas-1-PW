<?php
include 'connection.php';

$stmt = $conn->prepare("INSERT INTO film (judul, genre, sutradara, tahun) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $_POST['judul'], $_POST['genre'], $_POST['sutradara'], $_POST['tahun']);
$stmt->execute();

header("Location: index.php");
exit;
?>