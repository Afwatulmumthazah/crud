<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"root",
				"afwa2106",
				"kuliah"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
