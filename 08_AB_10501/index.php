<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap -->
	<link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "asset/css/style.css">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<link href = "bootstrap/css/bootstrap-responsive.css" rel = "stylesheet">
</head>
<body>
	<div class = "row"> 
		<div class = "span1"></div>
		<div class = "span11">
			<center><h3>MANAGE USERS</h3></center>
            <?php 
            require_once 'koneksi.php';
            if (!empty($_GET['update'])){
				if ($_GET['update'] == 1)
					echo "<p class='message'><h4>Data user berhasil diupdate</h4></p>";
				else if ($_GET['update'] == 2)
					echo "<p class='message'><h4>Data user berhasil ditambahkan</h4></p>";
				else if ($_GET['update'] == 3)
					echo "<p class='message'><h4>Data user berhasil dihapus</h4></p>";
			}
			$no = 1;
			$sqlCount = "select count(username) from user";
			$query = mysqli_query($conn, $sqlCount) or die(mysqli_error($conn));
			$rsCount = mysqli_fetch_array($query);
			$banyakData = $rsCount[0];
			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$limit = 5;
			$mulai_dari = $limit * ($page - 1);
			$sql_limit = "select * from user order by username limit $mulai_dari, $limit";
			$hasil = mysqli_query($conn, $sql_limit) or die(mysqli_error($conn));
			
			if(mysqli_num_rows($hasil) == 0){
				echo "<p class='message'>Data tidak ditemukan!</p>";
			}	
			?>
			<table class = "table table-hover">
				<thead>
					<tr class = "success">
						<td>No</td>
						<td>Username</td>
						<td>Password</td>
						<td>Level</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $no = $no + (($page - 1) * $limit);
					//Buang field ke dalam array
					while ($data = mysqli_fetch_array($hasil)) {
					?>
						<tr class = "success">
							<td><?php echo $no;?></td>
							<td><?php echo $data[1];?></td>
							<td><?php echo $data[2];?></td>
							<td><?php echo $data[3];?></td>
							<td>
								<a href= "updateUser.php?id=<?php echo $data[0];?>" class = "update">Update</a>
								<a href= "hapusUser.php?id=<?php echo $data[0];?>" class = "delete" onclick = "return confirm('Anda yakin menghapus data user <?php echo $data[1];?>?')">Hapus</a>
							</td>
						</tr>
						<?php $no++; 
					}?>
				</tbody>
			</table>
			<?php {} ?>     
			<div class = "pagination pagination-right">
				<?php
				$banyakHalaman = ceil($banyakData / $limit);
				echo 'Page ';
				for($i = 1; $i <= $banyakHalaman; $i++) {
					if($page != $i) {
						echo '<a href = "index.php?page='.$i.'">'.$i.' </a> ';
					} else {
						echo "$i ";
					}
				}
				?>
			</div>
			<a href = "tambahUser.php" button class = "btn btn-warning" type = "button">Tambah Data</a></button>
		</div>
	</div>
</body>
</html>