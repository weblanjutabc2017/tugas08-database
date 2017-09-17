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
<?php
	require_once 'koneksi.php';
	
	$id = $_GET['id'];

	$sqlquery = "SELECT * FROM user where id = '$id'";
	$query = mysqli_query($conn, $sqlquery);
	$rsCount = mysqli_fetch_array($query);
	$level = array('User','Admin');

 ?>
    <div class="container">
        <div class="row">
			<div class="span2"></div>
			<div class="span8">
				<center><h3>EDIT DATA USER</h3>
					<form method="post" action="updateUser2.php">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<table width="319" border="0">
							<tr>
								<td width="152">Username</td>
								<td width="157"><input name="username" type="text" size="20" value="<?php echo $rsCount['username'] ?>"/> 
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input name="password" type="text" size="20" value="<?php echo $rsCount['password'] ?>"/></td>
							</tr>
							<tr>
								<td>level <?php echo $rsCount['level'];?> </td>
								<td>
									<select name='level'>
									<?php
                            			foreach ($level as $lev){
                                			echo "<option value='$lev' ";
                                			echo $rsCount['level']==$lev?'selected="selected"':'';
                                			echo ">$lev</option>";
                            			}
                            		?>
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
			</div>
		</div>
	</div>
</body>
</html>