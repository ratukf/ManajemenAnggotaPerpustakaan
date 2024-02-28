<?php
$servename = "127.0.0.1" ;
$username = "root" ;
$password = "";
$dbname = "perpus" ;

//create connection
$conn = mysqli_connect($servename, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}

$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Charly Burley', 'JL. Gamelab Indonesia No. 9, Salatiga', 'laki-laki', 'kristen', 'SMK 40 Gamnelab')";
$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Delta Malta', 'JL. Gamelab Indonesia No. 9, Salatiga', 'laki-laki', 'islam', 'SMK 32 Gamnelab')";
$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Gamma Lumela', 'JL. Gamelab Indonesia No. 9, Salatiga', 'perempuan', 'islam', 'SMK 32 Gamnelab')";

if (mysqli_query($conn, $sql)) {
    echo "Rekord baru berhasil ditambahkan"; 
 } else {
    echo "Gagal: " . $sql . "<br>" . mysqli_error($conn);
 }

 mysqli_close($conn);
?>