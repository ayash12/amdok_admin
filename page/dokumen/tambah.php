<div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="?page=dokumen&aksi=upload.php" enctype="multipart/form-data" id="formku">
                                        <div class="form-group">
                                            <label>Nama Dokumen</label>
                                            <input class="form-control" name="nama" id="nama" />
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Kode Dokumen</label>
                                            <input class="form-control" name="kode" id="kode"/>
                                            
                                        </div>

                                       <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun" id="tahun">
                                                <?php
                                                $tahun = date("Y");
                                                for ($i=$tahun-8; $i <= $tahun; $i++) {
                                                    echo'
                                                    <option value="'.$i.'">'.$i.'</option>
                                                    ';
                                                }

                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>jumlah Dokumen</label>
                                            <input class="form-control" type="number" name="jumlah" id="jumlah"/>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" id="tanggal" name="tanggal" type="text" value="<?php  echo date('d-m-Y');?>" />
                                        </div>
                                        <div class="form-group">
                                        	<label>Input Gambar Dokumen</label>
                                        
											<input type="file" name="file" class="btn-primary" id="gambar">
										
                                        </div>
                                        <div>
                                            <!--<input id="simpandata" onclick="simpandata();" type="submit" name="simpan" value="simpan" class="btn btn-primary">-->
                                             <a href="javascript:;" id="simpanData" class="btn btn-primary" onclick="simpanData();">Simpan</a>
                                        </div>
                                    </div>

                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
function simpanData(){
    if($.trim($("#nama").val()) == ""){
        alert("Nama Dokumen Tidak Boleh Kosong");
    }else if($.trim($("#kode").val()) == ""){
        alert("Kode Dokumen Tidak Boleh Kosong");
    }else if($.trim($("#tahun").val()) == ""){
        alert("Tahun Tidak Boleh Kosong");
    }else if($.trim($("#jumlah").val()) == ""){
        alert("Jumlah Dokumen Tidak Boleh Kosong");
    
    }else{
        $('#simpanData').text('Please Wait ...').prop("onclick", null).off("click");
        $('#formku').submit(); 
    };
};
</script>
</body>
</html>