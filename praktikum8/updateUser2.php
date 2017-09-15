<?php
	require_once 'koneksi.php';
	$id=$_GET['id'};
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$update = "UPDATE user SET username = '$username' , password = '$password', level = '$level'";
	
	if(password==""){
		echo '<script type="text/javascript">
			var answer = alert ("Data yang dimasukkan belum lengkap!")
			window.location = "updateUser.php"</script>';
	}
	//kembali ke halaman user.php
	header('location:index.php?update=1');
	exit;
?>