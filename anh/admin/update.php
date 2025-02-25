<?php
include('connect.php');
session_start();
if (isset($_POST['upuser'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $level = $_POST['level'];
    $id=$_POST['id'];
    $sql = "UPDATE user SET username='$user' ,pass='$pass' ,name='$name', level='$level' ,gmail='$gmail' WHERE id_user='$id'";
    mysqli_query($conn, $sql);  
}
if (isset($_POST['updm'])) {
    $tendm = $_POST['tendm'];
    $id = $_POST['id'];
    $sql = "UPDATE danhmuc SET tendm='$tendm' WHERE id_danhmuc='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['uphang'])) {
    $tenhang = $_POST['tenhang'];
    $id = $_POST['id'];
    $sql = "UPDATE hangsx SET tenhang='$tenhang' WHERE id_hang='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['upbv'])) {
    $title = $_POST['title'];
    $id = $_POST['id'];
    $sql = "UPDATE blog SET title='$title' WHERE id_blog='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['uppro'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $sale = $_POST['sale'];
    $dungt = $_POST['dungt'];
    $kicht = $_POST['kicht'];
    $trongl = $_POST['trongl'];
    $ccyen = $_POST['ccyen'];
    $ktbanhxe = $_POST['ktbanhxe'];
    $dongco = $_POST['dongco'];
    $hopso = $_POST['hopso'];
    $phanh = $_POST['phanh'];
    $csmax = $_POST['csmax'];
    $id = $_POST['id'];
    $sql = "UPDATE product SET tensp='$tensp',gia='$gia',dungt='$dungt',kicht='$kicht',trongl='$trongl',chip='$ccyen',hedieuhanh='$ktbanhxe',camtruoc='$dongco',camsau='$hopso',manhinh='$phanh',pin='$csmax' ,sale = '$sale' WHERE id_product='$id'";
    mysqli_query($conn, $sql);
}
    $_SESSION['notiup'] = "<script> alert('Cập Nhật Thành Công !')</script>";

header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
?>
