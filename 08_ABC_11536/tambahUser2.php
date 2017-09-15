<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
$cek_username=mysql_num_rows(mysql_query
             ("SELECT username FROM user 
               WHERE username='$_POST[username]'"));
			   if ($cek_username > 0){
  echo "Username sudah terpakai, masukkan lagi!";
}
if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "tambahUser.php";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}
?>