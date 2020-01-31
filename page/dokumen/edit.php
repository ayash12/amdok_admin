
<?php 
   if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));

    $ekstensi_diperbolehkan = array('png','jpg');
    $name = $_FILES['file']['name'];
    $x = explode('.', $name);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1040700){          
            move_uploaded_file($file_tmp, 'gambar/'.$name);
            $query = $koneksi->query("UPDATE tb_dokumen (nama_dokumen, kode_dokumen, tahun, jumlah_dokumen, tgl_input, gambar)values('$nama', '$kode', '$tahun', '$jumlah','$tanggal', 'http://10.0.2.2/propem/gambar/$name')");
                if($query){
                  ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil di Ubah");
                                window.location.href="?page=dokumen";
                            </script>
                            <?php
                        }
           }
        }
        }
            //    $nama = @$_POST ['nama'];
             //   $kode = @$_POST ['kode'];
              //  $tahun = @$_POST ['tahun'];
              //  $jumlah = @$_POST ['jumlah'];
               // $tanggal = @$_POST ['tanggal'];

               // $simpan = @$_POST ['simpan'];
               

             //   if ($simpan) {
                    
                //    $sql = $koneksi->query("update tb_dokumen set nama_dokumen='$nama', kode_dokumen='$kode', tahun='$tahun', jumlah_dokumen='$jumlah', tgl_input='$tanggal' where id= '$id'");

                //    if ($sql) {
                 //      
                //    }
               // }

                

                ?>