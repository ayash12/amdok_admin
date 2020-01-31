 <a href="?page=user&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px"> <i class="fa fa-plus"></i> Tambah Data </a>

 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telpon</th>
                                             <th>Email</th>
                                            <th>Opsi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$no = 1;
                                    		$sql = $koneksi->query ("select * from tb_user where level = 'user'");

                                    		while ($data= $sql->fetch_assoc()) {

                                    			 $jk = ($data['jk']=='LAKI-LAKI')?"Laki-laki":"Perempuan";
                                    		
                                    	?>
                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nik'];?></td>
                                    		<td><?php echo $data['nama'];?></td>
                                    		<td><?php echo $jk;?></td>
                                    		<td><?php echo $data['tlp'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                    		
                                    		<td>
                                    			<a onclick="return confirm('anda yakin untuk menghapus data...?')" href="?page=user&aksi=hapus&id=<?php echo $data['nik']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	
                                    	</tr>


                                    <?php } ?>

                                    </tbody>
                                       </div>
                                   </div>
                                </div>
                             </div>
                          </div>