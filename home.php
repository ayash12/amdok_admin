<?php

	$sql = $koneksi->query("select * from tb_dokumen");
	while ($data= $sql->fetch_assoc()){
		$jml = $data['jumlah_dokumen'];
		@$total_belum = $total_belum+$jml;

   
	}
    
   

    $sql2 = $koneksi->query("select * from tb_transaksi where status = 'Pinjam'");
    while ($data= $sql2->fetch_assoc()){
        $jml2 = $data['jumlah_pinjam'];
        @$total_sudah = @$total_sudah+$jml2;
   
    }
        @$total= $total_belum-$total_sudah

?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome  Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-arrow-circle-right"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $total_belum?> Dokumen</p>
                    <p class="text-muted">Total Dokumen</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-arrow-circle-up"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">0<?php echo @$total_sudah?> Dokumen</p>
                    <p class="text-muted">diPinjam</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-arrow-circle-down"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $total?> Dokumen</p>
                    <p class="text-muted">Belum diPinjam</p>
                </div>
             </div>
		     </div>
                   
			</div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    
                        
                             <h5>Data Dokumen Terbaru</h5>
                        
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dokumen </th>
                                            <th>Tanggal</th>
                                            
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
                                            <td><?php echo $data['tgl_input'];?></td>
                                            
                                        </tr>


                                    <?php } ?>
                                      
                                    </tbody>

                                       </div>
                                   </div>
                                </div>

                             </div>
                             
                          </div>
