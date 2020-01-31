<?php 
	include "koneksi.php";
	if (@$_GET['nik'])
	{
	$f = $_GET['nik'];
	
	$query = "SELECT * FROM tb_request where nik = '$f'";
	$result = mysqli_query($koneksi,$query);
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($result)){
		$json[] = $row;

	}
	
	echo json_encode($json);
	}

	/*if($_SERVER['REQUEST_METHOD']=='GET'){

	$ia =@$_GET['nik'];
	$r=mysqli_query($koneksi,"select from tb_request where nik='$ia'");
	while($row=mysqli_fetch_assoc($r))
	{
	$cls[]=$row;
	//echo $fin."<br>";
	}
	echo json_encode($cls);
}	
	mysqli_close($con);*/
	?>
	
