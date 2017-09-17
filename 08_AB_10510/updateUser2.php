<?php
require_once 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
//$query = mysql_query (" update index set username='$username', password='$password', level='$level");
//$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";

/*if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "updateUser.php";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=2');    
}
?> */

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