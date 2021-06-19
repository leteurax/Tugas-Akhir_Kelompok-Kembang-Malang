<?php 
if(isset($_POST['daftar'])){
	include 'koneksi.php';
  session_start();
  $_SESSION['total']= $_SESSION['harga']*$_POST['jumlah'];
    $inset = mysqli_query($conn, " INSERT INTO pesan VALUES ( 
	   NULL,
          '".$_POST['tanggal']."',
          '".$_POST['jumlah']."',
		  '".$_SESSION['id']."',
      '".$_SESSION['tempat']."',
      '".$_SESSION['harga']."',
      '".$_SESSION['total']."') " );
		  if($inset){
            header('location:../ch/chekout.php');
          }else{
              echo ' maaf daftar gagal';
          }
}
?>