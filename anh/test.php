<?php
include('connect.php');
$sql= "SELECT * FROM hoadon ORDER BY id_hoadon DESC LIMIT 1";
$query=mysqli_query($conn,$sql);
$i=1;
$row =mysqli_fetch_array($query);
echo $row['id_hoadon'];

?>