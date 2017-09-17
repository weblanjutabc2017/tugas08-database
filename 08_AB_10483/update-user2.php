<?php
require_once 'koneksi.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$username         = $_POST['username'];
$password           = $_POST['password'];
$level       = $_POST['level'];

// query SQL untuk insert data
//$sqr = "update user set username='$username', level='$level', password='$password' where id='$id'";
$query="UPDATE user SET username='$username',password='$password',level='$level' where id='$id'";
if($username=="" or $password == ""){
			echo '<script type="text/javascript">
			var answer = alert ("Data Masih Belum Lengkap")
			window.location= "tambahUser.php"</script>';
		}
		else{
			$hasil = mysqli_query($conn,$query);
			header('location:index.php?update=1');
		}

?>
