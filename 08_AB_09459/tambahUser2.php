<?php
require_once 'koneksi.php';
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";

if ($username == "" or $password == "") {
	echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
	window.location = "tambahUser.php";
	</script>';



}
 else {
 		$cek_user=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username='".$username."'"));
			if ($cek_user > 0) {
				echo '<script language="javascript">
				alert ("User Sudah Ada Yang Menggunakan");
				window.location="tambahUser.php";
			</script>';
		}
		else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}

}
?>