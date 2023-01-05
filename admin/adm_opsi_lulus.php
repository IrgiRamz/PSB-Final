<?php
include '../koneksi.php';

ob_start();
session_start();
if (!isset($_SESSION['dfr_no']))
$id = $_GET['id'];
// update data ke database
mysqli_query($connect,"UPDATE daftar SET status='s' WHERE dfr_no='$id'");

// mengalihkan halaman kembali ke index.php
header("location:adm_all_peserta.php");
?>
