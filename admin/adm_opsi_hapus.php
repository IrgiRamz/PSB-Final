<?php  
include '../koneksi.php';

//mengambil id anggota
$id = $_GET['id'];

$hapus = "DELETE FROM `daftar` WHERE dfr_no = '$id'";
$data = mysqli_query($connect, $hapus);

header('location:adm_user_peserta.php');

?>