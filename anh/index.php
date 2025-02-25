<!DOCTYPE html>
<html>
<?php
include_once('connect.php');
session_start();

?>

<head>
    <title>Apple Nhat anh </title>
    <link rel="stylesheet" href="asset/style.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/main.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <?php
    include('header.php');
    include('link.php');
    include('footer.php');
    if (isset($_SESSION['notification'])) {
        echo $_SESSION['notification'];
        unset($_SESSION['notification']);
    }
    $sql = "DELETE FROM hoadon WHERE status ='0'";
    $query = mysqli_query($conn, $sql);
    $sql = "UPDATE cart SET id_hoadon='0' WHERE status='0'";
    $query = mysqli_query($conn, $sql);
    ?>