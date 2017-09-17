<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";

$cek = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysqli_query($conn, $cek);
$cek_user = mysqli_num_rows($hasil);

if ($cek_user > 0) {
	echo '<script language="javascript">
	alert ("User Sudah Digunakan!");
	window.location="index.php";
	</script>';
	exit();
} else { 
	header('location:index.php?update=2');    
}

if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "tambahUser.php";
    </script>';
} else {
	$hasil1 = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}	
}
?>