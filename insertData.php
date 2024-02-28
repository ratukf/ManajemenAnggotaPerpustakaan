<?php
$servename = "127.0.0.1" ;
$username = "root" ;
$password = "";
$dbname = "perpus" ;


//create connection 
$conn = mysqli_connect($servename, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Alpha Murpala', 'JL. Gamelab Indonesia No. 9, Salatiga', 'perempuan', 'islam', 'SMK 32 Gamnelab')";

if (mysqli_query($conn, $sql)) {
    echo "Record baru berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>