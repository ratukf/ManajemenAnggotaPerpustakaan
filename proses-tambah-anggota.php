<?php
include("config.php");

//cek apakah tombol daftar sudah diklik atau blum ?

if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    //buat query
    $sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil ?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan satus = sukses
        header('Location: index.php?status=sukses'); 
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status = gagal
        header('Location: index.php?statusgagal');
    }

} else {
    die("Akses dilarang...");
}
?>