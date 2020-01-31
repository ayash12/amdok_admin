<?php
$nik = $_GET ['id'];
$koneksi->query("delete from tb_user where nik = '$nik'");
?>

<script type="text/javascript">
	window.location.href="?page=user";
</script>