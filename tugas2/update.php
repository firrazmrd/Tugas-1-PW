<?php
include 'connection.php';

$stmt = $conn->prepare("UPDATE film SET judul=?, genre=?, sutradara=?, tahun=? WHERE id=?");
$stmt->bind_param("sssii", $_POST['judul'], $_POST['genre'], $_POST['sutradara'], $_POST['tahun'], $_POST['id']);
$stmt->execute();

header("Location: index.php");
exit;
?>