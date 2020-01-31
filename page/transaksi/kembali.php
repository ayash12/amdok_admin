<?php

$id = $_GET['id'];
$judul = $_GET['nama_dokumen'];


$sql = $koneksi->query("update tb_transaksi set status='Kembali' where id='$id'");
$sql1 = $koneksi->query("update tb_dokumen set jumlah_dokumen = (jumlah_dokumen+1) where nama_dokumen='$judul'");

?>

	<script type="text/javascript">
		alert("proses Kembalikan Buku Berhasil");
		window.location.href="?page=transaksi";
	</script>


                             
