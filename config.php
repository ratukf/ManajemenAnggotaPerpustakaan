<?php
$servename = "127.0.0.1" ;
$username = "root" ;
$password = "";
$dbname = "perpus" ;

//create connection
$db = mysqli_connect($servename, $username, $password, $dbname);
//check connection
if ( !$db ) {
    die("Gagal terhubung dengan database:" . mysqli_connect_error());
}
echo "Koneksi berhasil terhubung";

?>