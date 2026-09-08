<?php
session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] == "login"){
    header("location: views/dashboard.php");
}else{
    header("location: views/login.php");
}
?>
