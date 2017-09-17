<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<?php
	require_once 'koneksi.php';

	$user_id = $_GET["id"];
	$sql_limit = "select * from user where user_id = $user_id";
			$hasil = mysqli_query($conn, $sql_limit) or die(mysqli_error($conn));
	$data = mysqli_fetch_array($hasil);
	?>		
</head>
<body>
	<div class="container">
		<h1>Edit User</h1>
		<hr>
		<div class="row">
		<form action="updateUser2.php" method="post">
			<!-- left column -->

			<!-- edit form column -->
		<!-- 	<div class="col-md-9 personal-info">
				<div class="alert alert-info alert-dismissable">
					<a class="panel-close close" data-dismiss="alert">×</a> 
					<i class="fa fa-coffee"></i>
					This is an <strong>.alert</strong>. Use this to show important messages to the user.
				</div> -->
			<!-- 	<h3>user info</h3> -->
			
				
					<div class="form-group">
						<label class="col-lg-3 control-label">Username:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text"  name = "username" value="<?php echo $data[1];?>">
							<input class="form-control" type="text"  name = "id_username" value="<?php echo $data[0];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Password:</label>
						<div class="col-md-8">
							<input class="form-control" name = "password" type="Password" value="" >
						</div>

						<div class="form-group">
								<label class="col-md-3 control-label">Label:</label>
							<select class="form-control" name="level" id="level"  required">
								<option value="1">Admin</option>
								<option value="0">User</option>

							</select>
						</div>


						<div class="form-group">
							<label class="col-md-8 control-label"></label>
							<div class="col-md-8">
									  <button type="submit" name="simpan" class="btn btn-primary" onClick="return confirm('Apakah anda yakin data yang anda isikan sudah benar dan sesuai?')">Simpan</button>
								<!-- <input type="button" class="btn btn-primary" value="Save Changes"> -->
								<span></span>
								<input type="reset" class="btn btn-default" value="Cancel">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
	</body>
	</html>