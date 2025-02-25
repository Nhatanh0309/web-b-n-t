<?php
session_start();
session_unset();
//$_SESSION['notification']= "<script>alert ('Bạn Đã Đăng Xuất!')</script>";
header('Location: ./'); // Rewrite the header
die();
?>