<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
$cek=mysqli_fetch_array(mysqli_query($conn, "SELECT username FROM user WHERE username='$username'"));
if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "tambahUser.php";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}
?>