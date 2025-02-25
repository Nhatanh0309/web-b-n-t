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
        if($_POST['pass']!=$_POST['passl']){
        $_SESSION['notification'] = "<script>alert ('Bạn Nhập Lại Mật Khẩu Sai !')</script>";
        header('location: index.php');
        }else{
            $user = $_POST['user'];
            $gmail =$_POST['gmail'];
            $name =$_POST['name'];
            $sqlc="SELECT * FROM user WHERE username = '$user'";
            $queryc=mysqli_query($conn,$sqlc);
            if(mysqli_num_rows($queryc) != null){
                $_SESSION['notification'] = "<script>alert ('Tài Khoản Đã Có Người Sử Dụng !')</script>";
                header('location: index.php');
            }
            else{
            session_unset(); 
            $pass = md5($_POST['pass']);
            $sql = "INSERT INTO user (username ,pass ,gmail ,name) VALUES ('$user','$pass' ,'$gmail','$name')";
            mysqli_query($conn,$sql);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
    }


?>