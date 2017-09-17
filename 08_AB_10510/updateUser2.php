<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$query = mysql_query (" update index set username='$username', password='$password', level='$level");
//$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "updateUser.php";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}
?>