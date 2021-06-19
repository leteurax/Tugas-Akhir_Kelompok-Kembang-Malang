<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$password=$_POST['password'];

include("../koneksi.php");

$sql="insert into user(nama,email,password) values('$nama',
'$email',
'$password')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


