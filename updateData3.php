<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "perpus";

//membuat koneksi
$conn = mysqli_connect ($servename, $username, $password, $dbname);

//cek koneksi
if (!$conn) {
    die ("Koneksi gagal:" . mysqli_connect_error());
}

$sql = "UPDATE anggota_perpus SET jenis_kelamin='laki-laki' 
WHERE alamat LIKE '%studio' and asal_sekolah LIKE '%Gamaleb'";

if (mysqli_query($conn, $sql)) {
    echo "Rekord berhasil diupdate"; 
} else {
    echo "Ada kesalahan update rekord: " . mysqli_error($conn);
}

mysqli_close($conn);

//penerapan statement LIKE, dengan cara update data pada kolom jenis kelamin menjasi 'laki-laki'
//pada alamat yg mengandung kata 'studio', dan asala sekolah yg mengandung 'Gamelab'.
?>
