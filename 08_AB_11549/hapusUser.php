<?php
require_once 'koneksi.php';

$id = $_GET['id'];
$hapus = "delete from user where username='$id'";
$query = mysqli_query($conn, $hapus);
//kembali ke halaman user.php
header('location:index.php?update=3');
exit;
?>