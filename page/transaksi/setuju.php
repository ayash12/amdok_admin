<?php

	$id = @$_GET['id'];

	$sql = $koneksi->query("select * from tb_request where id= '$id'");

	$tampil = $sql->fetch_assoc();

	
$tgl_pinjam = date("d-m-y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali    = date("d-m-y", $tujuh_hari);


?>

<div class="panel panel-success">
                        <div class="panel-heading">
                            Konfirmasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Dokumen</label>
                                            <input class="form-control" name="nama_dok" value="<?php echo $tampil['nama_dokumen']?>"  readonly/>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" value="<?php echo $tampil['nik']?>" readonly/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" readonly/>
                                            
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Jumlah Pinjam</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah_pinjam']?>" readonly/>
                                            
                                        </div>
										<div class="form-group">
                                            <label>Tanggal Konfirmasi</label>
                                            <input class="form-control" name="tgl_pinjam" type="text" value="<?php echo $tgl_pinjam;?>" readonly/>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" name="tgl_kembali" type="text" value="<?php echo $kembali;?>" readonly/>
                                            
                                        </div>
                                        
                                        <div>
                                            <input type="submit" name="simpan" value="Konfirmasi" class="btn btn-success">
                                        </div>
                                    </div>

                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $nama_dok = @$_POST ['nama_dok'];
                $nik = @$_POST ['nik'];
                $nama = @$_POST ['nama'];
                $jumlah = @$_POST ['jumlah'];
                
                $tgl_pinjam = @$_POST['tgl_pinjam'];
                $tgl_kembali = @$_POST['tgl_kembali'];

                $simpan = @$_POST ['simpan'];
            

                if ($simpan) {
                    
                   $sql = $koneksi->query("insert into tb_transaksi (nama_dokumen, nik, nama, jumlah_pinjam, tgl_pinjam,tgl_kembali,status)values('$nama_dok', '$nik','$nama','$jumlah', '$tgl_pinjam','$tgl_kembali', 'Pinjam')");
                    $sql2 = $koneksi->query("update tb_dokumen set jumlah_dokumen = (jumlah_dokumen-1) where nama_dokumen='$nama_dok'");
                            
                    $sql3 = $koneksi->query("update tb_request set info = 'Ambil' where id='$id'");
                            

                    if ($sql) {
                        ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil DiKonfirmasi");
                                window.location.href="?page=transaksi";
                            </script>
                            <?php
                    }
                }

                ?>
