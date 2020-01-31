<?php 
   if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $name = $_FILES['file']['name'];
    $x = explode('.', $name);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    // print_r($_FILES);
    // die();;
    
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1040700){          
            move_uploaded_file($file_tmp, 'gambar/'.$name);
            $query = $koneksi->query("insert into tb_dokumen (nama_dokumen, kode_dokumen, tahun, jumlah_dokumen, tgl_input, gambar)values('$nama', '$kode', '$tahun', '$jumlah','$tanggal', '$name')");
                if($query){
                  ?>
                            <script type="text/javascript">
                                alert ("Data Berhasil Tambah");
                                window.location.href="?page=dokumen";
                            </script>
                            <?php
                        } 
           }
        }
        }
        

    //             $nama = @$_POST ['nama'];
    //             $kode = @$_POST ['kode'];
    //             $tahun = @$_POST ['tahun'];
    //             $jumlah = @$_POST ['jumlah'];
    //             $tanggal = @$_POST ['tanggal'];
				// $name= @$_FILES['gambar']['name'];
				// $file= @$_FILES['gambar']['tmp_name'];
    //             $simpan = @$_POST ['simpan'];
               

    //             if ($simpan) {
    //                 move_uploaded_file($file,"gambar/$name");
    //                 $sql = $koneksi->query("insert into tb_dokumen (nama_dokumen, kode_dokumen, tahun, jumlah_dokumen, tgl_input, gambar)values('$nama', '$kode', '$tahun', '$jumlah','$tanggal', '$name')");

    //                 if ($sql) {
    //                     
    //                 }
                    
    //             }