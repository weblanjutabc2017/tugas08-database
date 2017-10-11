<?php
	require_once 'koneksi.php';
	
		$id=$_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		
		$sqr = "update user set username='$username', level='$level', password='$password' where id='$id'";
		
		if($username=="" or $password == ""){
			echo '<script type="text/javascript">
			var answer = alert ("Data Masih Belum Lengkap")
			window.location= "tambahUser.php"</script>';
		}
		else{
			$hasil = mysqli_query($conn,$sqr);
			header('location:index.php?update=1');
		}