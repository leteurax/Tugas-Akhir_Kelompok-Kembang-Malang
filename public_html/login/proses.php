<?php 
if(isset($_POST['masuk'])){
	include 'koneksi.php';
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$cek = mysqli_query($conn, "SELECT * FROM user WHERE email ='".$email."' AND password ='".$pass."'");
	$data = mysqli_fetch_array($cek);
	$nama_pelogin = $data['nama'];
	$email_pelogin = $data['email'];
	$id_pelogin = $data['id'];


	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['nama']= $nama_pelogin;
		$_SESSION['email']=$email_pelogin;
		$_SESSION['id']=$id_pelogin;
		if($id_pelogin == 1){
			header('location:admin/index.php');
		}else{
		header('location:index.php');
		}
	}else{
		echo 'gagal masuk';
	}

}
?>