<?php
require_once 'koneksi.php';
$id = $_GET['id'];
$sql = "select * from user where username='{$id}'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$rows = [];
if(mysqli_num_rows($result) > 0){
	$exists = true;
	for($i=0; $row = mysqli_fetch_array($result); $i++) array_push($rows, $row);
} else {
	$exists = false;
}
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
					<?php if($exists): /////// IF DATA EXISTS /////// ?>
					<form action="updateUser2.php?id=<?php echo $_GET['id'] ?>" method="post">
						<table width="319" border="0">
							<tr>
								<td width="152">Username</td>
								<td width="157"><input type="text" id="username" size="20" value="<?php echo $rows[0]['username'] ?>" disabled /></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input name="password" type="text" id="password" size="20" value="<?php echo $rows[0]['password'] ?>" /></td>
							</tr>
							<tr>
								<td>Level</td>
								<td>
									<select name='level'>
										<option value='user' <?php if($rows[0]['level'] == 'user') echo "selected" ?>>User</option>
										<option value='admin' <?php if($rows[0]['level'] == 'admin') echo "selected" ?>>Admin</option>
									</select>
								</td>
							</tr>
						</table>
						<br/>
						<table width border="0">
							<tr>
								<td width="92"><button class="btn btn-warning" type="submit">Simpan</a></button></td>
								<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
							</tr>
						</table>
					</center>
				</form>
			<?php else: ?>
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Data user yang dimaksud tidak ditemukan.
				</div>
			<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
