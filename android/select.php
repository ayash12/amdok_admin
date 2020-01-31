<?php 
	include "koneksi.php";
	
	$query = "SELECT * FROM tb_dokumen";
	$result = mysqli_query($koneksi,$query);
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($result)){
		$json[] = $row;

	}
	
	echo json_encode($json);
	
	
	
?>
