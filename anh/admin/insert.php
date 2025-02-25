<?php
include('connect.php');
//Hãng 1
if (isset($_POST['ishang'])) {
    if ($_FILES['uploadFile']['name'] != NULL&&$_POST['tenhang']!=NULL) {// file k dk trống
        $tenhang = $_POST['tenhang'];
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") 
        {
            // Nếu là ảnh tiến hành code upload
            $path = "data/logo/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];// dia chỉ hiện tại
            $name = $_FILES['uploadFile']['name'];//ten file
            // sao chép v
            move_uploaded_file($tmp_name,'../'. $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO hangsx (tenhang ,img) VALUES ('$tenhang','$image_url')";
            mysqli_query($conn, $sql);
        } 
    }
}
//Danh Muc 2
if (isset($_POST['isdm'])) {
    $tendm = $_POST['tendm'];
            $sql = "INSERT INTO danhmuc (tendm) VALUES ('$tendm')";
            mysqli_query($conn, $sql);
        }
//SLIDE 3
if (isset($_POST['issl'])) {
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/slide/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name']; // dia chỉ hiện tại
            $name = $_FILES['uploadFile']['name']; //ten file
            // sao chép v
            move_uploaded_file($tmp_name, '../' . $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO slide (link) VALUES ('$image_url')";
            mysqli_query($conn, $sql);
        }
    }
}
//USER 4
if (isset($_POST['isuser'])) {
    $user = $_POST['username'];
    $pa = $_POST['pass'];
    $pass=md5($pa);
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $level = $_POST['level'];
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/user/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name,'../'. $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        }
    }
    $sql = "INSERT INTO user (username ,pass ,img ,name, level ,gmail) VALUES ('$user','$pass','$image_url','$name','$level','$gmail')";
    mysqli_query($conn, $sql);
}

//Product 5
if (isset($_POST['ispro'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $dungt = $_POST['dungt'];
    $kicht = $_POST['kicht'];
    $trongl = $_POST['trongl'];
    $danhmuc = $_POST['danhmuc'];
    $hang = $_POST['hang'];
    $ccyen = $_POST['chip'];
    $ktbanhxe = $_POST['hedieuhanh'];
    $dongco = $_POST['camtruoc'];
    $hopso = $_POST['camsau'];
    $phanh = $_POST['manhinh'];
    $csmax = $_POST['pin'];
    $sale = $_POST['sale'];
    $mau = $_POST['mau'];
    $ldungt = $_POST['ldungt'];
    $lhopso = $_POST['lhopso'];

    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/imgproduct/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, '../' . $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO product (tensp ,img ,gia ,dungt ,kicht ,trongl ,id_danhmuc ,id_hang ,chip ,hedieuhanh ,camtruoc ,camsau ,manhinh ,pin, id_hopso, id_mau, id_dungt, sale) VALUES ('$tensp','$image_url','$gia','$dungt','$kicht','$trongl','$danhmuc','$hang','$ccyen','$ktbanhxe','$dongco','$hopso','$phanh','$csmax','$lhopso','$mau','$ldungt','$sale')";
            mysqli_query($conn, $sql);
        }
    }

}
//bài viet

if (isset($_POST['isbv'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/blog/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name']; // dia chỉ hiện tại
            $name = $_FILES['uploadFile']['name']; //ten file
            // sao chép v
            move_uploaded_file($tmp_name, '../' . $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO blog (img , title , content) VALUES ('$image_url', '$title' ,'$content')";
            mysqli_query($conn, $sql);
        }
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>