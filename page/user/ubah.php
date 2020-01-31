<?php

    $nip = @$_GET['id'];

    $sql = $koneksi->query("select * from tb_user where nip_nidn= '$nip'");

    $tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];

?>

<div class="panel panel-primary">
                        <div class="panel-heading">
                            Ubah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NIP/NIDN</label>
                                            <input class="form-control" name="nip" value="<?php echo $tampil['nip_nidn']?>" readonly/>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                             <input type="checkbox" value="l" name="jk" <?php echo($jkl=='l')?"checked":""?>/>Laki-laki 
                                            </label>
                                            <label class="checkbox-inline">
                                             <input type="checkbox" value="p" name="jk" <?php echo($jkl=='p')?"checked":""?>/>Perempuan 
                                            </label>
                                        </div>
                                          <div class="form-group">
                                            <label>Program Studi</label>
                                            <input class="form-control" name="prodi" value="<?php echo $tampil['prodi']?>"/>
                                            
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
                $nip = @$_POST ['nip'];
                $nama = @$_POST ['nama'];
                $jk = @$_POST ['jk'];
                $prodi = @$_POST ['prodi'];
                

                $simpan = @$_POST ['simpan'];
               

                if ($simpan) {
                    
                   $sql = $koneksi->query("update tb_user set nip_nidn='$nip', nama='$nama', jk='$jk', prodi='$prodi' where nip_nidn= '$nip'");

                    if ($sql) {
                        ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil Disimpan");
                                window.location.href="?page=user";
                            </script>
                            <?php
                    }
                }

                ?>
