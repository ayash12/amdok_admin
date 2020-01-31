<?php

	// echo $_POST['login'];
	// die(); 
 	if (isset($_POST['pass'])) {

 		$email = @$_POST['email'];
 		$pass = md5($_POST['pass']);

 		include "koneksi.php";
 		$sql = $koneksi->query("select * from tb_user where email='$email' and pass='$pass'");
 		$data = $sql->fetch_assoc();

 		$ketemu = $sql->num_rows;

 		if ($ketemu >=1) {

 			session_start();

 				if ($data['level'] == "admin") {
 					$_SESSION['admin'] = $data['nik'];
           $_SESSION['nama'] = $data['nama'];
 					header("location:index.php");

 				}else if ($data['level'] == "user") {
           $_SESSION['user'] = $data['nik'];
           $_SESSION['nama'] = $data['nama'];
           echo '<script language="javascript">alert("Anda Bukan Admin!"); location="login.php";</script>';
 					}
 				}else{
 					?>
 					<script type="text/javascript">
 						alert("Login Gagal Email atau Password Anda Tidak Sesuai Silahkan Ulangi");
 						window.location.href="login.php"
					</script>
 					<?php
				
	}
}
?>
