<?php 
if(isset($_POST['daftar'])){
	include 'koneksi.php';
    $input = mysqli_query($conn, " INSERT INTO pesan VALUES ( 
	   NULL,
          '".$_POST['tanggal']."',
          '".$_POST['jumlah']."',
		  '".$_SESSION['id']."') " );
		  if($input){
            header('location:fw.php');
          }else{
              echo ' maaf daftar gagal';
          }
}
?>