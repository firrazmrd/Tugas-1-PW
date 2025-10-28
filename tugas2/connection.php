<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_film";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>