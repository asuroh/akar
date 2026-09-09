<?php
    session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
        header("location: login.php?pesan=belum_login");
        exit;
    }

    include '../layouts/header.php';
    include '../layouts/sidebar.php';

    include '../layouts/footer.php';
?>