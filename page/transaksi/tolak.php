<?php

$id = $_GET['id'];



$sql = $koneksi->query("update tb_request set info = 'Ditolak' where id='$id'");


?>

	<script type="text/javascript">
		alert("peminjaman berhasil ditolak");
		window.location.href="?page=transaksi&aksi=request";
	</script>