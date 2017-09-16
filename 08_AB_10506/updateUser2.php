<?php
	require_once 'koneksi.php';
	// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$id=$_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];

		$sqr = "update user set username='$username', level='$level', password='$password' where id='$id' ";

		if($password == ""){
			echo '<script type="text/javascript">
			var answer = alert ("Data Masih Belum Lengkap")
			window.location= "tambahUser.php"</script>';
		}
		else{
			$hasil = mysqli_query($conn,$sqr);
			header('location:index.php?update=1');
		}
