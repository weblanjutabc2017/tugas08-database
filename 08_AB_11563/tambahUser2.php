<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql = "select username from user where username='{$username}'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if(mysqli_num_rows($result) > 0){
	$exists = true;
} else {
	$exists = false;
}

$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
if ($username == "" or $password == "") {
  echo '<script type="text/javascript">
  var answer = alert("Data masih belum lengkap")
  window.location = "tambahUser.php";
  </script>';
} else if($exists) {
  echo '<script type="text/javascript">
  var answer = alert("Username sudah digunakan, silakan gunakan username lain")
  window.location = "tambahUser.php";
  </script>';
} else {
	$hasil = mysqli_query($conn, $input);
	header('location:index.php?update=2');
}
?>
