<?php
    session_start();
    error_reporting();

    $koneksi = new mysqli ("localhost","root","","db_amdok");
    $koneksi1 = new mysqli ("localhost","root","","db_uts");
    include "function.php";

if (@$_SESSION['admin'] || @$_SESSION['user']) {



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DPM Universitas Teknologi Sumbawa - Admin </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
      <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> A.M-DOK</a> 
            </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo $_SESSION['nama'].' | '.date('d-M-Y');?> &nbsp; <a href="logout.php" class="btn btn-primary square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
               <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>


                    <li>
                        <a  href="?page=dokumen"><i class="fa fa-book fa-3x"></i> Data Dokumen</a>
                    </li>

                    <li>
                        <a  href="?page=user"><i class="fa fa-user fa-3x"></i>  Data User</a>
                    </li>


                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-refresh fa-3x"></i> Transaksi</a>
                    </li>
                     

                
               
             </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php
                            $page = @$_GET['page'];
                            $aksi = @$_GET['aksi'];

                            if ($page == "dokumen") {
                            if ($aksi == "") {
                            include "page/dokumen/dokumen.php";
                                } else if ($aksi == "tambah"){
                                   include "page/dokumen/tambah.php";
                                    }else if ($aksi == "ubah"){
                                   include "page/dokumen/ubah.php";
                                    }else if ($aksi == "hapus"){
                                   include "page/dokumen/hapus.php";
                                    }else if ($aksi == "upload.php"){
                                   include "page/dokumen/upload.php";
                                   }else if ($aksi == "edit.php"){
                                   include "page/dokumen/edit.php";
                                    }else if ($aksi == "upload2.php"){
                                   include "page/dokumen/upload2.php";
                                   }

                            } else if ($page == "user") {
                                if ($aksi == ""){
                                include "page/user/user.php";
                            }else if ($aksi == "tambah"){
                                   include "page/user/tambah.php";
                             } else if ($aksi == "ubah"){
                                   include "page/user/ubah.php";
                                }else if ($aksi == "hapus"){
                                   include "page/user/hapus.php";
                                    }


                        }else if ($page == "transaksi") {
                                if ($aksi == ""){
                                include "page/transaksi/transaksi.php";
                            }else if ($aksi == "tambah"){
                                   include "page/transaksi/tambah.php";
                                    }else if ($aksi == "kembali"){
                                   include "page/transaksi/kembali.php";
                                    }else if ($aksi == "request"){
                                   include "page/transaksi/request.php";
                                    }
                                    else if ($aksi == "setuju"){
                                   include "page/transaksi/setuju.php";
                                    }else if ($aksi == "tolak"){
                                   include "page/transaksi/tolak.php";
                                    }


                                }else if ($page == "") {

                                  include "home.php";
                                }

                        ?>
                     
                     
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


<?php

}else{
  header("location:login.php");
}
?>