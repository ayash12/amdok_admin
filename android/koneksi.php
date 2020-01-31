<?php
	
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DB_SELECT', 'db_amdok');

	$koneksi = new mysqli(HOSTNAME,USERNAME,PASSWORD,DB_SELECT) or die ( 
		mysql_errno());
?>