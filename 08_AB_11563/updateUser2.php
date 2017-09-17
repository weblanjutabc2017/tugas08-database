<?php
require_once 'koneksi.php';

if(isset($_POST['password']) && isset($_POST['level']) && !empty($_POST['password']) && !empty($_POST['level'])) {
  $sql = "update user set password='" . $_POST['password'] . "', level='" . $_POST['level'] . "' where id='" . $_GET['id'] . "'";
  $query = mysqli_query($conn, $sql) or die(mysql_error($conn));
  //kembali ke halaman user.php
  header('location:index.php?update=1');
  exit;
} else {
  header('location:index.php?update=1');
}
?>
