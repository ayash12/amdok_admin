<?php
 

 

 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama_dok = @$_POST['nama_dokumen'];
		$nik = @$_POST['nik'];
		$nama = @$_POST['nama'];
		$tanggal = date("d-m-Y");
		
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_request (nama_dokumen,nik,nama,tgl_pinjam,jumlah_pinjam,info) VALUES ('$nama_dok','$nik','$nama','$tanggal','1','Ditunggu')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($koneksi,$sql)){
		echo 'Berhasil Miminjam Silahkan Menunggu Konfirmasi';
		}else{
		echo 'Gagal Menambahkan Peminjaman';
		}
		
		mysqli_close($koneksi);
	}
?>