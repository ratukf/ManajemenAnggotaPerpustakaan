<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "perpus";

//membuat koneksi
$conn = mysqli_connect ($servename, $username, $password, $dbname);

//cek kondisi koneksi
if (!$conn) {
    die ("Koneksi Gagal:" . mysqli_connect_error());
}

$sql = "SELECT id_anggota, nama, alamat, jenis_kelamin, agama, asal_sekolah FROM anggota_perpus";
$result = mysqli_query($conn, $sql);
echo "================================================================================================================================\n";
echo "id anggota | Nama Lengkap |                Alamat  Lengkap                |   Jenis Kelamin   |   Agama   |   Asal Sekolah   |\n";       
echo "================================================================================================================================\n";
if (mysqli_num_rows($result) > 0) {
    //hsil data dari setiap baris
    while($row = mysqli_fetch_assoc($result)) {

    echo "   " .$row["id_anggota"]."      ". $row["nama"]. "          ".$row["alamat"]."         ".$row["jenis_kelamin"]. "           ".$row["agama"]. "       ".$row["asal_sekolah"]. "\n";
  } 
} else {
    echo "0 result";
}

mysqli_close($conn);
?>