<?php
	ob_start();
	session_start();

    $koneksi = new mysqli ("localhost","root","","db_amdok");

    if (@$_SESSION['admin'] || @$_SESSION['user']) {

    	header('location:index.php');
    }else{

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Login</title>
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

    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
            
                <br /><br />
                  <h2 style="color: #000080"> Direktorat Penjaminan Mutu</h2>
                    <img src="assets/img/uts.png" class="user-image img-responsive"/>
          
                <h2> Home Login</h2>
               
              
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-primary ">
                            <div class="panel-heading">
                        <strong> Silahkan Masukan Email dan Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" id="formku" method="POST" action="masuk.php">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email " />
                                        </div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" id="pass" name="pass" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    	<!-- <input type="submit" id="simpanData" onclick="simpanData();" name="login" value="Login" class="btn btn-primary"> -->
                                      <a href="javascript:;" id="simpanData" class="btn btn-primary" onclick="simpanData();">Login</a>
                                     
                                  
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
function simpanData(){
    if($.trim($("#email").val()) == ""){
        alert("Email Tidak Boleh Kosong");
    }else if($.trim($("#pass").val()) == ""){
        alert("Password Tidak Boleh Kosong");
    }else{
        $('#simpanData').text('Please Wait ...').prop("onclick", null).off("click");
        $('#formku').submit(); 
    };
};
</script>
</body>
</html>


	<?php

// 	if (isset($_POST['login'])) {

// 		$email = @$_POST['email'];
// 		$pass = md5($_POST['pass']);

// 		$sql = $koneksi->query("select * from tb_user where email='$email' and pass='$pass'");
// 		$data = $sql->fetch_assoc();

// 		$ketemu = $sql->num_rows;

// 		if ($ketemu >=1) {

// 			session_start();

// 				if ($data['level'] == "admin") {
// 					$_SESSION['admin'] = $data['nik'];
//           $_SESSION['nama'] = $data['nama'];
// 					header("location:index.php");

// 				}else if ($data['level'] == "user") {
//           $_SESSION['user'] = $data['nik'];
//           $_SESSION['nama'] = $data['nama'];
//           echo '<script language="javascript">alert("Anda Bukan Admin!"); location="login.php";</script>';
// 					}
// 				}else{
// 					?>

 					<script type="text/javascript">
// 						alert("Login Gagal Email atau Password Anda Tidak Sesuai Silahkan Ulangi")
// 					</script>
 					<?php
				
// 		} 

// 	}

}

	?>