<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Request Peminjaman
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
                                            <th>Jumlah</th>
                                            <th>status</th>
                                            <th>Opsi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$no = 1;
                                    		$sql = $koneksi->query ("select * from tb_request where info='Ditunggu'");

                                    		while ($data= $sql->fetch_assoc()) {

                                    			
                                    	?>
                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nama_dokumen'];?></td>
                                    		<td><?php echo $data['nik'];?></td>
                                    		<td><?php echo $data['nama'];?></td>
                                    		<td><?php echo $data['tgl_pinjam'];?></td>
                                            <td><?php echo $data['jumlah_pinjam'];?></td>
                                    		<td><?php echo $data['info'];?></td>
                                    		
                                    		
                                    		<td>
                                    			<a href="?page=transaksi&aksi=setuju&id=<?php echo $data['id'];?>" class="btn btn-info" ><i class="fa fa-check"></i> </a>
                                    			<a onclick="return confirm('anda yakin untuk menolak peminjaman..?')" href="?page=transaksi&aksi=tolak&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
	
                                    	</tr>


                                    <?php } ?>

                                    </tbody>
                                       </div>
                                   </div>
                                </div>
                             </div>
                          </div>