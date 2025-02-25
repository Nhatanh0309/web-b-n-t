<?php
$hosting="localhost";
$user="root";
$pass="";
$data="webdt";
$conn= mysqli_connect($hosting,$user,$pass,$data);
if(!$conn){
	echo "Can not connect Database".mysqli_connect_errno();
}
?>