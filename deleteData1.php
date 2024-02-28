<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}

// perintah sql untuk hapus data
$sql = "DELETE FROM anggota_perpus WHERE asal_sekolah LIKE '%Jl. Educa Studio'";

if (mysqli_query($conn, $sql)) {
  echo "Rekord berhasil dihapus";
} else {
  echo "Ada kesalahan hapus: " . mysqli_error($conn);
}

mysqli_close($conn);

//menghapus yg mengandung kata'studio'.
?>