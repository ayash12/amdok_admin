<div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Data User</label>
                                            <select class="form-control" name="user">
                                                <?php

                                                $sql = $koneksi1->query("select*from karyawan order by nik");
                                                
                                                while ($data=$sql->fetch_assoc()) {
                                                    echo"<option value='$data[nik],$data[nama],$data[jk],$data[kd_depart],$data[id_bagian_dept],$data[kd_jabatan],$data[tlp],$data[email]'>$data[nik]: $data[nama]: </option>";

                                                }
                                              

                                                ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <select class="form-control" name="pass">
                                                <?php

                                                $sql = $koneksi1->query("select*from user order by username");

                                                while ($data=$sql->fetch_assoc()) {
                                                    echo"<option value='$data[username],$data[password]'>$data[username]</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Level Akses</label>
                                            <select class="form-control" name="akses">
                                                <?php

                                                $sql = $koneksi->query("select*from tb_pengguna order by level");

                                                while ($data=$sql->fetch_assoc()) {
                                                    echo"<option value='$data[level]'>$data[level]</option>";
                                                }

                                                ?>
                                            </select>
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


                    $user = $_POST['user'];
                    $pecah = explode(",", $user);
                    $nik = $pecah[0];
                    $nama = $pecah[1];
                    $jk = $pecah[2];
                    $kd_depart = $pecah[3];
                    $id_bagian_dept = $pecah[4];
                    $kd_jabatan = $pecah[5];
                    $tlp = $pecah[6];
                    $email = $pecah[7];
                      
                    $pass = $_POST['pass'];
                    $pecah2 = explode(",", $pass);
                    $username = $pecah2[0];
                    $password = $pecah2[1];

                    $akses = $_POST['akses'];
                    $pecah3 = explode(",", $akses);
                    $level = $pecah3[0];
                    

                        
                            $sql = $koneksi->query("insert into tb_user (nik, nama, jk, kd_depart,id_bagian_dept,kd_jabatan,tlp,email,pass,level)values('$nik', '$nama','$jk', '$kd_depart','$id_bagian_dept', '$kd_jabatan', '$tlp','$email','$password','$level')");
                          
                            ?>
                            <script type="text/javascript">
                                
                                alert("Hak Akses Berhasil diberikan");
                                window.location.href="?page=user";

                            </script>
                            <?php
                     
                }

                ?>

