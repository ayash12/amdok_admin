<?php

$tgl_pinjam = date("d-m-y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali    = date("d-m-y", $tujuh_hari);

?>

<div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST">
                                     
                                         <div class="form-group">
                                            <label>Judul</label>
                                            <select class="form-control" name="buku">
                                                <?php

                                                $sql = $koneksi->query("select*from tb_dokumen order by id");

                                                while ($data=$sql->fetch_assoc()) {
                                                    echo"<option value='$data[id],$data[nama_dokumen]'>$data[nama_dokumen]</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="nama">
                                                <?php

                                                $sql = $koneksi->query("select*from tb_user order by nip_nidn");

                                                while ($data=$sql->fetch_assoc()) {
                                                    echo"<option value='$data[nip_nidn],$data[nama]'>$data[nama]</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" name="tgl_pinjam" type="text" value="<?php echo $tgl_pinjam;?>" readonly/>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" name="tgl_kembali" type="text" value="<?php echo $kembali;?>" readonly/>
                                            
                                        </div>
                                                                                
                                        
                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                    </div>

                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <?php
               
                if (isset($_POST['simpan'])) {

                    $tgl_pinjam = $_POST['tgl_pinjam'];
                    $tgl_kembali = $_POST['tgl_kembali'];


                    $buku = $_POST['buku'];
                    $pecah_buku = explode(",", $buku);
                    $id = $pecah_buku[0];
                    $judul = $pecah_buku[1];

                    $nama = $_POST['nama'];
                    $pecah_nama = explode(",", $nama);
                    $nip = $pecah_nama[0];
                    $nama = $pecah_nama[1];

                    $sql = $koneksi->query("select * from tb_dokumen where nama_dokumen ='$judul'");
                    while ($data = $sql->fetch_assoc()) {
                        $sisa = $data['jumlah_dokumen'];
                      

                        if ($sisa == 0) {
                            ?>
                            <script type="text/javascript">
                                
                                alert("Stok Buku Habis, Transaksi Tidak Dapat Dilakukan, Silahkan Tambah Stok Buku Terlebih Dahulu");
                                window.location.href="?page=transaksi&aksi=tambah";

                            </script>
                            <?php
                        }else {
                            
                            $sql = $koneksi->query("insert into tb_transaksi (nama_dokumen, nip_nidn, nama, tgl_pinjam,tgl_kembali,jumlah_pinjam,status)values('$judul', '$nip','$nama', '$tgl_pinjam','$tgl_kembali', '1', 'Pinjam')");
                            $sql2 = $koneksi->query("update tb_dokumen set jumlah_dokumen = (jumlah_dokumen-1) where id='$id'");
                            ?>
                            <script type="text/javascript">
                                
                                alert("Buku Berhasil dipinjam");
                                window.location.href="?page=transaksi";

                            </script>
                            <?php
                        }
                    }


                }

                ?>
