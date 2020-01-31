<?php
$koneksi = new mysqli("localhost","root","","db_amdok");
$content = '
	<style type="text/css">
		.table{border-collapse: collapse;}	
		.table th{padding: 8px 5px; margin-top: 5px; background-color: #cccccc;}
		.table td{padding: 8px 5px;}
		</style>

';

$content .= '

<page>
	<h2>Laporan Peminjaman Dokumen</h2>
	<table border="1" class="tabel">
	<tr>
	  		<th>No</th>
            <th>Nama Dokumen</th>
            <th>NIP/NIDN</th>
            <th>Nama</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>status</th>
    </tr>'; 
      $no = 1;
        $sql = $koneksi->query ("select * from tb_transaksi");
           	while ($data= $sql->fetch_assoc()) {	
    	$content .= '
    	<tr>
            <td>'.$no++.' </td>
            <td>'.$data['nama_dokumen'].'</td>
            <td>'.$data['nik'].'</td>
            <td>'.$data['nama'].'</td>
            <td>'.$data['tgl_pinjam'].'</td>
         	<td>'.$data['tgl_kembali'].'</td>
             <td>'.$data['status'].'</td>                                   
                                    	
         </tr>';
     }
     $content .= '
</table>
</page>';
	require_once('../assets/html2pdf/html2pdf.class.php');
	$html2pdf = new HTML2PDF('P','A4','fr');
	$html2pdf->WriteHTML($content);
	$html2pdf->Output('Laporan Peminjaman.pdf');
	
	

?>