<?php
include("connect.php");
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM cart WHERE id_cart ='$id'";
    $query = mysqli_query($conn, $sql);
}
if(isset($_POST['update'])){
    foreach ($_POST['soluon'] as $id => $soluong) {
        $sql = "UPDATE cart SET soluong='$soluong' WHERE id_cart='$id'";
        $query = mysqli_query($conn, $sql);
    }
    session_start();
    $_SESSION['notification'] = "<script>alert ('Bạn Đã Cập Nhật !')</script>";
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>