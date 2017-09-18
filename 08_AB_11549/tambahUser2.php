<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "tugas08"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
	
	if ($username == "" or $password == ""){
		echo '<script type="text/javascript">
		var answer = alert("Data masih belum lengkap")
		window.location = "tambahUser.php";
		</script>';
	}else{
		$hasil = mysqli_query($conn, $input);
		header('location:index.php?update=2');
	}
?>