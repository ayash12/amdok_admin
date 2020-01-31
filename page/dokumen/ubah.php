<?php

    $id = @$_GET['id'];

    $sql = $koneksi->query("select * from tb_dokumen where id= '$id'");

    $tampil = $sql->fetch_assoc();

    $tahun2 = $tampil['tahun'];

    $gbr = $tampil['gambar'];
?>

<div class="panel panel-primary">
                        <div class="panel-heading">
                            Ubah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="?page=dokumen&aksi=upload2.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Dokumen</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama_dokumen']?>" />

                                            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Kode Dokumen</label>
                                            <input class="form-control" name="kode" value="<?php echo $tampil['kode_dokumen']?>" />
                                            
                                        </div>

                                       <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
                                                <?php
                                                $tahun = date("Y");
                                                for ($i=$tahun-8; $i <= $tahun; $i++) {
                                                    if ($i==$tahun2) {
                                                        echo'
                                                    <option value="'.$i.'" selected>'.$i.'</option>
                                                    ';
                                                    }else{
                                                    echo'
                                                    <option value="'.$i.'">'.$i.'</option>
                                                    ';
                                                }
                                            }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>jumlah Dokumen</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah_dokumen']?>"/>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" value="<?php echo $tampil['tgl_input'];?>"/>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Ubah Gambar Dokumen</label>
                                            <br>

                                            <img src="gambar/<?php echo $tampil['gambar'];?>" style="width:120px;height:120px"></br>
                                            <br>
                                        
                                            <input type="file" name="file" class="btn-primary" id="gambar"></br>
                                            <!-- <input type="file" name="gambar" class="btn-primary" id="gambar"></br> -->
                                        
                                        </div>
                                        
                                        <div>
                                            <input type="submit" name="ubah" value="ubah" class="btn btn-primary">
                                        </div>
                                    </div>

                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                //  if(isset($_POST['ubah'])){

                 
                //  $nama = @$_POST ['nama'];
                //  $kode = @$_POST ['kode'];
                //  $tahun = @$_POST ['tahun'];
                //  $jumlah = @$_POST ['jumlah'];
                //  $tanggal = @$_POST ['tanggal'];
                //  print_r($_FILES);
                //         die();

                //     if (isset($_FILES['file']['name']) && ($_FILES['file']['name'] !="")){

                //         $size = $_FILES ['file']['size'];
                //         $temp = $_FILES ['file']['tmp_name'];
                //         $type = $_FILES ['file']['type'];
                //         $gamb = $_FILES ['file']['name'];
                //         // print_r($_FILES);
                //         // die();
                //         unlink("gambar/".$gbr);
                //         move_uploaded_file($temp, "gambar/".$gamb);
                //     } 
                //     else {
                //         $gambarr=$gbr;
                //     }

                    
                //     $update = $koneksi->query("UPDATE tb_dokumen SET nama_dokumen='$nama', kode_dokumen='$kode', tahun='$tahun', jumlah_dokumen='$jumlah', tgl_input='$tanggal', gambar='$gamb' WHERE id= '$id'");

                  

                // if ($update) {
                //         ?>
                             <script type="text/javascript">
                //                 alert ("Data Berhasil Diubah");
                //                 window.location.href="?page=dokumen";
                //             </script>
                            <?php
                //     }
                // }

                //SAMPE SINI DIKOMENNYA TADI


                /*$nama = @$_POST ['nama'];
                $kode = @$_POST ['kode'];
                $tahun = @$_POST ['tahun'];
                $jumlah = @$_POST ['jumlah'];
                $tanggal = @$_POST ['tanggal'];


                $simpan = @$_POST ['simpan'];
               

                if ($simpan) {
                    
                    $sql = $koneksi->query("update tb_dokumen set nama_dokumen='$nama', kode_dokumen='$kode', tahun='$tahun', jumlah_dokumen='$jumlah', tgl_input='$tanggal' where id= '$id'");

                    if ($sql) {
                        ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil Diubah");
                                window.location.href="?page=dokumen";
                            </script>
                            <?php
                    }
                }*/

                ?>