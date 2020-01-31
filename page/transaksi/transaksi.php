<a href="?page=transaksi&aksi=request" class="btn btn-success" style="margin-bottom: 5px"> <i class="fa fa-file"></i> Request </a>
<a href="./laporan/laporan_peminjaman_excel.php" class="btn btn-primary" style="margin-bottom: 5px"> <i class="fa fa-print"></i> Cetak Excel</a>
<a href="./laporan/laporan_peminjaman_pdf.php" class="btn btn-primary" style="margin-bottom: 5px"> <i class="fa fa-print"></i> Cetak PDF</a>

 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dokumen</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Jumlah</th>
                                            <th>status</th>
                                            <th>Opsi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$no = 1;
                                    		$sql = $koneksi->query ("select * from tb_transaksi where status='Pinjam'");

                                    		while ($data= $sql->fetch_assoc()) {

                                    			
                                    	?>
                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nama_dokumen'];?></td>
                                    		<td><?php echo $data['nik'];?></td>
                                    		<td><?php echo $data['nama'];?></td>
                                    		<td><?php echo $data['tgl_pinjam'];?></td>
                                    		<td><?php echo $data['tgl_kembali'];?></td>
                                    		<td>
                                    			<?php 

                                    			$tgl_dateline = $data['tgl_kembali'];
                                    			$tgl_kembali = date('Y-m-d');

                                    			$lambat = terlambat($tgl_dateline, $tgl_kembali);

                                    			if ($lambat>0) {
                                    				echo "
                                    				<font color='red'>$lambat hari</font>
                                    				";
                                    			}else{
                                    				echo $lambat ."hari";
                                    			}

                                    			?>
                                    			
                                    		</td>
                                            <td><?php echo $data['jumlah_pinjam'];?></td>
                                    		<td><?php echo $data['status'];?></td>
                                    		
                                    		
                                    		<td>
                                    			<a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id'];?>&nama_dokumen=<?php echo $data['nama_dokumen'];?>" class="btn btn-primary" ><i class="fa fa-book"></i> kembali</a>
                                    			
	
                                    	</tr>


                                    <?php } ?>

                                    </tbody>
                                       </div>
                                   </div>
                                </div>
                             </div>
                          </div>