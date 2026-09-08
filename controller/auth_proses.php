<?php 
session_start();

// get koneksi 
include '../config/connection.php';

// set variable
$username = $_POST['username'];
$password = $_POST['password'];

// query disini 
$query = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$username' AND password=MD5('$password')");
$cek = mysqli_num_rows($query);

// ini check data ada atau tidak
if ($cek > 0){
    $data = mysqli_fetch_assoc($query);
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['status'] = 'login';

    // ini lempar ke dashboard
    header("location:../views/dashboard.php");
}else{
    // ini lempar ke login lagi
    header("location:../views/login.php?pesan=gagal");
}
?> 