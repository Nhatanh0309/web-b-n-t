<?php
session_start();
if (isset($_REQUEST['ok']))
{
// Gán hàm addslashes để chống sql injection
$search = addslashes($_GET['search']);

if (empty($search)) {
$_SESSION['search']['noti'] = "Yeu cau nhap du lieu vao o trong";
}
else
{
$_SESSION['search']['data']=$search;
        header('Location: ./?goto=result');
}
}
header('Location: ./?goto=result');

?>