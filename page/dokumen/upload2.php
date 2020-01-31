<?php

                 if(isset($_POST['ubah'])){

                 $id = @$_POST['id'];
                 $nama = @$_POST ['nama'];
                 $kode = @$_POST ['kode'];
                 $tahun = @$_POST ['tahun'];
                 $jumlah = @$_POST ['jumlah'];
                 $tanggal = @$_POST ['tanggal'];
                 // print_r($_FILES);
                 //        die();

                    if (isset($_FILES['file']['name']) && ($_FILES['file']['name'] !="")){

                        $size = $_FILES ['file']['size'];
                        $temp = $_FILES ['file']['tmp_name'];
                        $type = $_FILES ['file']['type'];
                        $gamb = $_FILES ['file']['name'];
                        // print_r($_FILES);
                        // die();
                        
                        move_uploaded_file($temp, "gambar/".$gamb);
                    } 
                    else {
                        $gambarr=$gbr;
                    }

                    
                    $update = $koneksi->query("UPDATE tb_dokumen SET nama_dokumen='$nama', kode_dokumen='$kode', tahun='$tahun', jumlah_dokumen='$jumlah', tgl_input='$tanggal', gambar='$gamb' WHERE id= '$id'");

                  

                if ($update) {
                        ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil Diubah");
                                window.location.href="?page=dokumen";
                            </script>
                            <?php
                    }
                }