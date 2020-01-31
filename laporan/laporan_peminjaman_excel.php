<?php

$koneksi = new mysqli("localhost","root","","db_amdok");


$filename = "Laporan Peminjaman-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename='$filename'");
header("content-type: application/vdn.ms-exel");

?>

<h2> Laporan Peminjaman </h2>
<table border="1">
	<tr>
	  		<th>No</th>
            <th>Nama Dokumen</th>
            <th>NIP/NIDN</th>
            <th>Nama</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>status</th>
    </tr>
    <?php
        $no = 1;
        $sql = $koneksi->query ("select * from tb_transaksi ");
           	while ($data= $sql->fetch_assoc()) {	
    	?>  
    	<tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_dokumen'];?></td>
            <td><?php echo $data['nik'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['tgl_pinjam'];?></td>
         	<td><?php echo $data['tgl_kembali'];?></td>
             <td><?php echo $data['status'];?></td>                                   
                                    	
                   	</tr>


                <?php } ?>
                          		
</table>