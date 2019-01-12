<?php
include"koneksi.php";



$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = "insert INTO datamahasiswa SET
								nama = '$nama',
								jenis_kelamin = '$jenis_kelamin',
								alamat = '$alamat',
								email = '$email'
								";

mysqli_query($koneksi, $query)
or die {"Gagal Perintah SQL".mysql_error()};
header('location:index.php');

?>

