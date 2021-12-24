<?php

$server = "localhost";
$user = "root";
$password = "Deux.1616";
$nama_database = "sekolah";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>