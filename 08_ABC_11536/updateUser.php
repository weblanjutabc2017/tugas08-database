<?php
require_once 'koneksi.php';

$id = $_GET[id];
$update = "UPDATE FROM user where id='$id'";
$query = mysqli_query($conn, $update) or die(mysql_error($conn));
//kembali ke halaman user.php
header('location:index.php?update=3');
exit;
?>