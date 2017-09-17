<?php
require_once 'koneksi.php';

$id = $_GET['id'];
$hapus = "delete from user where id='$id'";
$query = mysqli_query($conn, $hapus) or die(mysql_error($conn));
//kembali ke halaman user.php
header('location:index.php?update=3');
exit;
?>
