<?php
session_start();
include 'connection.php';
$fotoid = $_GET['fotoid'];
$userid = $_SESSION['userid'];

$tanggallike date('Y-m-d');
$query = mysqli_query($koneksi, "INSERT INTO likefoto VALUES('','$fotoid','$tanggallike')");

echo "<script>location.href='../admin/home.php'</script>"
?>