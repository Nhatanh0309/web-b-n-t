<?php
session_start();
include("connect.php");
$iduser = $_SESSION['id_user'];
$idpro = $_GET['idpro'];
$sql = "SELECT * FROM cart WHERE id_user='$iduser' AND id_product='$idpro' AND status ='0'";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query) == null){
   $soluong =1; 
   $sql = "INSERT INTO cart (id_user ,id_product , soluong, id_hoadon, status) VALUES ('$iduser','$idpro','$soluong','0','0')";
}else{
    $row = mysqli_fetch_array($query);
    $id =$row['id_cart'];
    $soluong = $row['soluong']+1;
    $sql = "UPDATE cart SET soluong='$soluong' WHERE id_cart='$id' AND status ='0'";
    
}
mysqli_query($conn,$sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>