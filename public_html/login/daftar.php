<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman daftar</title>
        <link rel="stylesheet" href="tampil.css">
        <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1c438f65-5c1a-471d-8952-8d64e6412309";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    </head>
   
    <body>
        <div class="container">
          <h1>daftar</h1>
            <form action="" method="post">
            <input type="text" name="nama" placeholder="nama" /><br>
                <input type="text" name="email" placeholder="email"/><br>
             
                <input type="password" name="pass"placeholder="password"><br>
                <input type="submit" name="daftar" value="daftar"/><br>
				</form>
				

			<form >
			<button class="daftar"><a href="login.php">login</a></button>
            <button class="kembali"><a href="../index.html">kembali</a> </button>
            
			</form>
            <?php 
if(isset($_POST['daftar'])){
	include 'koneksi.php';
    $input = mysqli_query($conn, " INSERT INTO user VALUES ( 
        NULL,
         '".$_POST['nama']."', 
          '".$_POST['email']."', 
          '".$_POST['pass']."') " );
          if($input){
            header('location:login.php');
          }else{
              echo ' maaf daftar gagal';
          }
}
?>


			
                
        </div>     
    </body>
</html>