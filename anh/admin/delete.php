<?php

switch($_GET['table']){
    case 'slide':
        $table = "slide";
        $id = "id_slide=" . $_GET['id'];
        break;
    case 'danhmuc':
        $table = "danhmuc";
        $id ="id_danhmuc=".$_GET['id'];
        break;
    case 'hang':
        $table = "hangsx";
        $id = "id_hang=" . $_GET['id'];
        break;
    case 'pro':
        $table = "product";
        $id = "id_product=" . $_GET['id'];
        break;
    case 'user':
        $table = "user";
        $id = "id_user=" . $_GET['id'];
        break;
    case 'new':
        $table = "blog";
        $id = "id_blog=" . $_GET['id'];
        break;
}
$sql ="DELETE FROM $table WHERE $id";
$query=mysqli_query($conn,$sql);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>