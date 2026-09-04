<?php
$host = "127.0.0.1";
$user = "root";
$pass = "root123";
$dbName = "db_absensi";

$con = mysqli_connect($host, $user, $pass, $dbName);
if (!$con) {
    die("Koneksi database gagal : ". mysqli_connect_error());
    
}else{
    echo "Koneksi sukses";
}
?>