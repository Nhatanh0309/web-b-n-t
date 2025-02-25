<?php
$status = "Thanh Toán Khi Nhận Hàng";
$vnp_OrderInfo = $_POST['order_desc'];
$vnp_addr = $_POST['txt_billing_addr1'];
$vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
$vnp_TxnRef = $_POST['order_id'];
include('../connect.php');
$sql = "UPDATE hoadon SET status='$status',hotennn='$vnp_OrderInfo',diachi='$vnp_addr',sdt='$vnp_Bill_Mobile' WHERE id_hoadon='$vnp_TxnRef'";
mysqli_query($conn, $sql);
$sql = "UPDATE cart SET status='$status' WHERE id_hoadon='$vnp_TxnRef'";
mysqli_query($conn, $sql);
session_start();
$_SESSION['notification'] = "<script>alert ('Bạn Nhận Được Hàng TRong Vài Ngày Tới !')</script>";
header('Location: ../');
exit;
?>
