<html>
<head> <h1> Aplikasi Crud Sederhana </h1> </head>

<body>

<button type="button" class="btn btn-muted"><a href="tambah.php"> Tambah </a> </button>
<table border=1>
				<tr>
					<td><b>
						No 
					</td></b>
					<td><b>
						Nama 
					</td></b>
					<td><b>
						Jenis Kelamin
					</td><b>
					<td><b>
						Telepon
					</td><b>
					<td><b>
						Alamat
					</td><b>
					<td>
						Opsi
					</td></b>
				</tr>
			<?php
			include"koneksi.php";
			$no =1;
			$data =mysqli_query ($koneksi, " select 
			nim,
			nama,
			jenis_kelamin,
			alamat,
			email
			from datamahasiswa
			order by nim DESC ");
			while ($row =mysqli_fetch_array ($data))) {
				?>
				<tr>
				<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['jenis_kelamin']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row['nim']; ?>">Detail</a> |
						<a href="edit.php?id=<?php echo $row['nim']; ?>">Edit</a> |
						<a href="hapus.php?id=<?php echo $row['nim']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
</body>
</html>