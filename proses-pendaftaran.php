<?php
 
include("config.php");
 
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 
// ambil data dari formulir
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$ttl = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$kelas = $_POST['kelas'];

 
// buat query
$sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin,tanggal_lahir, agama, kelas) VALUE ('$nama', '$alamat', '$jk','$ttl', '$agama', '$kelas')";
$query = mysqli_query($db, $sql);
 
// apakah query simpan berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses
header('Location: index.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status=gagal
header('Location: index.php?status=gagal');
}
 
 
} else {
die("Akses dilarang...");
}
 
?>