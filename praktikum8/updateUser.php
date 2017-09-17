<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "praktikum8"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span2"></div>
				<div class="span8">
					<center><h3>UPDATE DATA USER</h3>
						<?php
							$id=$_GET['id'];
							$sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
							if(mysqli_num_rows($sql) == 0){
								header ("Location: index.php");
							}
							else{
								$row = mysqli_fetch_assoc($sql);
							}
						?>
					<form action="updateUser2.php" method="post">
						<table width="319" border="0">
						<tr>
							<td width="152">ID</td>
							<td width="157"><input
							name="id" type="text" id="id" size="20" value="<?php echo $row['id']; ?>" readonly/></td>
							</tr>
							<td width="152">Username</td>
							<td width="157"><input
							name="username" type="text" id="username" size="20" value="<?php echo $row['username']; ?>" /></td>
							</tr>
							<tr>
							<td>Password</td>
							<td><input name="password"
							type="text" id="password" size="20" /></td>
						</tr>
						<tr>
							<td>Level</td>
							<td>
							<select name='level'>
								<option
								value='user'>User</option>
								<option
								value='admin'>Admin</option>
							</select>
							</td>
						</tr>
						</table>
						<br/>
						<table width border="0">
								<tr>
								<td width="92"><button class="btn btnwarning"
								type="submit">Simpan</a></button></td>
								<td width="92"><a href="index.php"
								button class="btn btn-warning" type="button">Batal</a></button></td>
								</tr>
						</table>
				</center>
					</form>
						</div>
							</div>
								</div>
</body>
</html>