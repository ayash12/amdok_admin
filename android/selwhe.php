<?php 
	include "koneksi.php";
	if (@$_GET['kode_dokumen'])
	{
	$kodok = $_GET['kode_dokumen'];
	$query = "SELECT * FROM tb_dokumen WHERE kode_dokumen ='$kodok'";
	$result = mysqli_query($koneksi,$query);
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($result)){
		$json[] = $row;

	}
	
	echo json_encode($json);
	
	}
	
?>
