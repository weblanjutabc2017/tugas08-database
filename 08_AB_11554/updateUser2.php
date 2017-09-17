<?php

	require_once 'koneksi.php';

	// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$id=$_POST['id'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		$sqr = "update user set level='$level', password='$password' where id='$id' ";
		
		if($level == ""){
			echo '<script type="text/javascript">
			var answer = alert ("Data Masih Belum Lengkap")
			window.location= "updateUser.php"</script>';
		}
		else{
			$hasil = mysqli_query($conn,$sqr);
			header('location:index.php?update=1');
		}
?>