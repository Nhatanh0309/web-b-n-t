<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * Description of vnpay_ajax
 *
 * @author xonv
 */
require_once("./config.php");
include('../connect.php');
$vnp_TxnRef = $_POST['order_id'];
//session_start();
//$iduser = $_SESSION['id_user']; //user nguoi dung
$sql = "SELECT * FROM cart WHERE id_hoadon ='$vnp_TxnRef'";
$query = mysqli_query($conn, $sql); //lay cac san pham trong gio
$total = 0;
while ($row = mysqli_fetch_array($query)) {
    $idpro = $row['id_product'];//id theo thu tu
    $sqlp = "SELECT * FROM product WHERE id_product = '$idpro'";
    $queryp = mysqli_query($conn, $sqlp);
    $rowp = mysqli_fetch_array($queryp);
    $gia = $rowp['gia'] * (100 - $rowp['sale']) / 100;// tinh sp
    $total += $gia;//gia
}

$vnp_Amount=$total*100000;
// $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = $_POST['order_desc'];
$vnp_OrderType = $_POST['order_type'];
// $vnp_Amount = $_POST['amount']*100;
$vnp_Locale = $_POST['language'];
$vnp_BankCode = $_POST['bank_code'];
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
$vnp_addr =$_POST['txt_billing_addr1'];
$vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
$vnp_Bill_Email = $_POST['txt_billing_email'];
//update

    $sql = "UPDATE hoadon SET hotennn='$vnp_OrderInfo',diachi='$vnp_addr',sdt='$vnp_Bill_Mobile' WHERE id_hoadon='$vnp_TxnRef'";
    mysqli_query($conn, $sql);

//Billing

if (isset($fullName) && trim($fullName) != '') {
    $name = explode(' ', $fullName);
    $vnp_Bill_FirstName = array_shift($name);
    $vnp_Bill_LastName = array_pop($name);
}

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
    "vnp_Bill_Email"=>$vnp_Bill_Email,
   
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
}

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
