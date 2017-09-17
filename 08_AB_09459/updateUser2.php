<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$id_username = $_POST['id_username'];
$password = $_POST['password'];
$level = $_POST['level'];
$sql = "UPDATE user SET username = '$username', password = '$password', level = $level WHERE user_id = $id_username " ;

if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "updateUser.php?id='.$id_username.'";
    </script>';
} else {
	$hasil = mysqli_query($conn, $sql);    
	 echo '<script type="text/javascript">
	var answer = alert("Data berubah")
    window.location = "./";
    </script>';
	}  
?>