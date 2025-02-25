<?php
include ('connect.php');
session_start();
    $user=$pass="";
    if($_POST['user']==null && $_POST['pass']==null){  
        $_SESSION['notification'] = "<script>alert ('Bạn Chưa Nhập Thông Tin !')</script>";
        header('Location: index.php');
        exit;
    }else if($_POST['user']==null){
        $_SESSION['notification'] = "<script>alert ('Bạn Chưa Nhập Tài Khoản !')</script>";
        header('location: index.php');
        exit;
    }else if($_POST['pass']==null){
        $_SESSION['notification'] = "<script>alert ('Bạn Chưa Nhập Mật Khẩu !')</script>";
        header('location: index.php');
    }else{
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $sql = "SELECT * FROM user WHERE username = '$user' And pass = '$pass'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)==0){
            $_SESSION['notification'] = "<script>alert ('Thông Tin Đăng Nhập Không Chính Xác !')</script>";
            header('location: index.php');
            exit; 
        }else{
            unset($_SESSION['notification']);
            $queryz = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($queryz);
            $_SESSION['name']=$row['name'];
            $_SESSION['id_user']=$row['id_user'];
            $_SESSION['level'] = $row['level'];
            if($row['img']==NULL){
                $_SESSION['imges'] = 'imges/user/ad.jpg';
            }else{
                $_SESSION['imges'] = $row['img'];
            
            }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }


?>