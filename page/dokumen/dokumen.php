 <a href="?page=dokumen&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px"> <i class="fa fa-plus"></i> Tambah Data </a>

 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Dokumen
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dokumen </th>
                                            <th>Kode Dokumen</th>
                                            <th>Tahun</th>
                                            <th>Persediaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$no = 1;
                                    		$sql = $koneksi->query ("select * from tb_dokumen");

                                    		while ($data= $sql->fetch_assoc()) {

                                               
                                    		
                                    	?>
                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nama_dokumen'];?></td>
                                    		<td><?php echo $data['kode_dokumen'];?></td>
                                    		<td><?php echo $data['tahun'];?></td>
                                    		<td><?php echo $data['jumlah_dokumen'];?></td>
                                    		<td>
                                    			<a href="?page=dokumen&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                    			<a onclick="return confirm('anda yakin untuk menghapus data...?')" href="?page=dokumen&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	
                                    	</tr>


                                    <?php } ?>

                                    </tbody>
                                       </div>
                                   </div>
                                </div>
                             </div>
                          </div>