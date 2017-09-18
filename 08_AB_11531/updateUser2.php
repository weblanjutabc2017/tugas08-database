<?php
	require_once 'koneksi.php';

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	

	$cek = "SELECT * FROM user WHERE username = '$username'";
	$hasil = mysqli_query($conn, $cek);
	$cek_user = mysqli_num_rows($hasil);
	if ($cek_user > 0) {
		$update = "
		UPDATE user
		SET 
			password = '$password',
			level = '$level'
		WHERE id='$id'";
 
		$query = mysqli_query($conn, $update);
		echo '<script language="javascript">
		alert ("User Sudah Ada!");
		window.location="index.php";
		</script>';

		exit();

		
	} else {
		$update = "
		UPDATE user
		SET 
			username = '$username',
			password = '$password',
			level = '$level'
		WHERE id='$id'";
 
		$query = mysqli_query($conn, $update);
		header('location:index.php?update=3');
	}
	
?>